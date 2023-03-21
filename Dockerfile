# syntax = docker/dockerfile:experimental

FROM php:8-fpm-alpine3.17 as base

ARG WEB_USER_PSW
ARG DB_HOST
ARG IS_DEV="false"

ENV DB_HOST=$DB_HOST
ENV IS_DEV=$IS_DEV

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# install tools and extensions
RUN chmod +x /usr/local/bin/install-php-extensions
RUN apk update && apk upgrade && apk add curl zip unzip nginx rsync git
RUN install-php-extensions pgsql pdo_pgsql swoole xml bcmath mbstring zip redis curl @composer
RUN echo "">/etc/apk/repositories

WORKDIR /var/www/html
# copy application code, skipping files based on .dockerignore
COPY . /var/www/html

# setup composer to download packages from gitlab the install everything needed
RUN if [[ "$IS_DEV" == "true" ]];  \
    then \
      composer install --optimize-autoloader; \
    else \
      composer install --optimize-autoloader --no-dev; \
    fi

# for security reason as soon as the packages got installed we rewrite the value with a dummy string
RUN mkdir -p storage/logs
RUN touch storage/logs/laravel.log
RUN php artisan optimize:clear
RUN addgroup webgroup
RUN echo -e "${WEB_USER_PSW}\n${WEB_USER_PSW}\n" | adduser -G webgroup webuser
RUN cp .fly/entrypoint.sh /entrypoint
RUN chmod +x /entrypoint

# load octane
RUN mkdir -p /etc/nginx/sites-available/
RUN cp .fly/nginx-default-swoole /etc/nginx/http.d/default.conf;

# load .env
RUN mv .env.example .env
RUN php artisan key:generate

# Multi-stage build: Build static assets
# This allows us to not include Node within the final container
FROM node:lts-alpine3.17 as node_modules

RUN mkdir /app

RUN mkdir -p /app
WORKDIR /app
COPY . .
COPY --from=base /var/www/html/vendor /app/vendor

# Build vite
RUN npm ci --no-audit
RUN npm run build;

# From our base container created above, we
# create our final image, adding in static
# assets that we generated above
FROM base as final_image

# Packages like Laravel Nova may have added assets to the public directory
# or maybe some custom assets were added manually! Either way, we merge
# in the assets we generated above rather than overwrite them
COPY --from=node_modules /app/public /var/www/html/public-npm
RUN rsync -ar /var/www/html/public-npm/ /var/www/html/public/
RUN apk del rsync git
RUN rm -rf /var/www/html/public-npm
RUN chown -R webuser:webgroup /var/www/html

EXPOSE 8080

ENTRYPOINT ["/entrypoint"]

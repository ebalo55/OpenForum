#!/usr/bin/env bash

if [ "${RUN_SCHEDULER}" == "true" ]; then
    echo "[+] Running laravel scheduler"
    su webuser -c 'php /var/www/html/artisan schedule:work -q &'
else
    echo "[-] Laravel scheduler not setup, skipping"
fi

#!/usr/bin/env ash

if [ "${RUN_QUEUE}" == "true" ]; then
    echo "[+] Running laravel scheduler"
    su webuser -c 'php /var/www/html/artisan queue:work -q &'
else
    echo "[-] Laravel queue not setup, skipping"
fi


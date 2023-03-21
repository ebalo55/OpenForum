#!/usr/bin/env ash

if [ "${RUN_MIGRATION}" == "true" ]; then
    echo "[+] Running migrations"
    su webuser -c 'php /var/www/html/artisan migrate --seed'
else
    echo "[-] Migrations not setup, skipping"
fi

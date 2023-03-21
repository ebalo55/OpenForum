#!/usr/bin/env bash

if [ "${RUN_WEBSERVICE}" == "true" ]; then
    echo "[+] Starting webserver"
    # Switch to web user
    su webuser -c 'php -d variables_order=EGPCS /var/www/html/artisan octane:start --server=swoole --host=0.0.0.0 --rpc-port=6001 --port=8000 &'
    nginx
else
    echo "[-] Webserver not setup, skipping"
fi

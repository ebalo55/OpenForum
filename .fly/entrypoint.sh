#!/usr/bin/env ash

echo "[+] Running user scripts"
# Run user scripts, if they exist
for f in /var/www/html/.fly/scripts/*.sh; do
    # Bail out this loop if any script exits with non-zero status code
    ash "$f" || break
done
echo "[+] User script execution completed"

echo "[+] Spawning cron"
# Spawn cron
crond -f -l 2 -L /dev/stdout

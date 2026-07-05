#!/bin/sh
set -e

# Substitusi $PORT ke nginx config
envsubst '${PORT}' < /etc/nginx/http.d/default.conf > /tmp/default.conf
mv /tmp/default.conf /etc/nginx/http.d/default.conf

# Generate key kalau belum ada, cache config, migrate
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force

exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf

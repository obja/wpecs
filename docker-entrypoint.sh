#!/bin/bash
set -e

chown -R www-data:www-data /var/www/html
rm -rf /var/www/html/docker-entrypoint.sh /var/www/html/Dockerfile

exec "$@"
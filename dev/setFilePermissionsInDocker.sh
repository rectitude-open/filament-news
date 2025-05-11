#!/bin/sh
set -e
cd /home/wwwroot/filament-news || exit
chown -R www-data:www-data /home/wwwroot/filament-news && \
find /home/wwwroot/filament-news -type f -exec chmod 644 {} \; && \
find /home/wwwroot/filament-news -type d -exec chmod 755 {} \; && \
chmod -R +x /home/wwwroot/filament-news/vendor/bin/ && \
chmod -R +x /home/wwwroot/filament-news/dev/

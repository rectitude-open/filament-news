#!/bin/bash
set -e

/home/wwwroot/filament-news/vendor/bin/pest
/home/wwwroot/filament-news/vendor/bin/pint
/home/wwwroot/filament-news/vendor/bin/phpstan analyse

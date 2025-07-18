#!/usr/bin/env bash
# Exit on error
set -o errexit

# Install dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

# Generate application key
php artisan key:generate --force

# Link storage directory
php artisan storage:link

# Install node dependencies and build assets
npm install
npm run prod

# Optimize Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache

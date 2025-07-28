#!/bin/bash

# Copy environment file if it doesn't exist
if [ ! -f .env ]; then
    cp .env.example .env
fi

# Generate application key if not set
php artisan key:generate --ansi --force

# Run database migrations
php artisan migrate --force

# Clear and optimize for production
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# Cache for production (only if no route conflicts)
php artisan config:cache
php artisan view:cache

# Try to cache routes, but continue if it fails
php artisan route:cache || echo "Route caching skipped due to closures or conflicts"

# Start the application using PHP's built-in server
exec php -S 0.0.0.0:${PORT:-8000} -t public public/index.php
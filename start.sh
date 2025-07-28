#!/bin/bash

# Copy environment file if it doesn't exist
if [ ! -f .env ]; then
    cp .env.example .env
fi

# Generate application key if not set
php artisan key:generate --ansi --force

# Cache configuration
php artisan config:cache

# Run database migrations
php artisan migrate --force

# Start the application using PHP's built-in server with no timeout
exec php -S 0.0.0.0:${PORT:-8000} -t public
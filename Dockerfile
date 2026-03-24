# Use official PHP CLI image
FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip git curl libzip-dev zip \
    && docker-php-ext-install zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy project files
COPY . .

# Copy example .env if .env missing
RUN cp .env.example .env

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Fix folder permissions
RUN chmod -R 777 storage bootstrap/cache

# Generate Laravel APP_KEY if not set
RUN php artisan key:generate

# Serve Laravel on Railway dynamic port
CMD php artisan serve --host=0.0.0.0 --port=$PORT
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

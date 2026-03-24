FROM php:8.1-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip git curl libzip-dev zip \
    && docker-php-ext-install zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy project
COPY . .

# Copy example env
RUN cp .env.example .env

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Generate key
RUN php artisan key:generate

# Fix permissions
RUN chmod -R 777 storage bootstrap/cache

# Serve app
CMD php artisan serve --host=0.0.0.0 --port=$PORT
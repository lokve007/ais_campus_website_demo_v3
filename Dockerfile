FROM php:8.1-cli

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

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Generate app key
RUN php artisan key:generate

# Serve Laravel
CMD php artisan serve --host=0.0.0.0 --port=$PORT
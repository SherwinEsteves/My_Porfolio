# Build frontend assets
FROM node:22-alpine AS frontend

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build


# Install Laravel PHP dependencies
FROM composer:2 AS composer

WORKDIR /app

COPY composer.json composer.lock ./
COPY . .

RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader


# Laravel application
FROM php:8.5-cli-alpine

WORKDIR /app

RUN apk add --no-cache \
    icu-dev \
    libzip-dev \
    oniguruma-dev \
    && docker-php-ext-install \
    mbstring \
    intl \
    pdo_mysql \
    bcmath \
    zip

COPY --from=composer /app/vendor ./vendor
COPY --from=frontend /app/public/build ./public/build

COPY . .

RUN echo "=== CHECK PUBLIC BUILD ===" \
    && ls -lah public/build \
    && find public/build -maxdepth 2 -type f

RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 10000

CMD ["sh", "-c", "php artisan config:clear && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]

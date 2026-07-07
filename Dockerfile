# Stage 1: Build frontend assets
FROM node:20-alpine AS node_builder

WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2: PHP application
FROM php:8.2-fpm-alpine AS base

RUN apk add --no-cache \
    nginx supervisor gettext \
    libpng-dev libjpeg-turbo-dev libwebp-dev freetype-dev \
    libzip-dev zip unzip git curl-dev \
    oniguruma-dev icu-dev libxml2-dev

RUN docker-php-ext-configure gd --with-jpeg --with-webp --with-freetype \
    && docker-php-ext-install \
        pdo_mysql mbstring zip exif pcntl gd intl bcmath xml curl

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

# Copy hasil build Vite dari stage node_builder
COPY --from=node_builder /app/public/build ./public/build

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN mkdir -p storage/framework/{sessions,views,cache} storage/logs bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

COPY docker/nginx.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

EXPOSE 8080

ENTRYPOINT ["/entrypoint.sh"]

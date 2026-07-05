FROM php:8.2-fpm-alpine

# 1. Install dependensi sistem menggunakan apk (bukan apt-get) yang jauh lebih cepat & stabil
RUN apk update && apk add --no-nginx-bootstrap --no-cache \
    git \
    cronie \
    curl \
    libpng-dev \
    libxml-dev \
    oniguruma-dev \
    zip \
    unzip \
    nginx

# 2. Install ekstensi PHP bawaan yang dibutuhkan Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# 3. Ambil Composer versi terbaru
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Tentukan direktori kerja di dalam container
WORKDIR /var/www

# 5. Salin seluruh file project ke dalam container
COPY . /var/www

# 6. Install dependensi composer (vendor) khusus untuk production
RUN composer install --no-interaction --optimize-autoloader --no-dev

# 7. Salin konfigurasi Nginx dengan jalur folder Alpine Linux
COPY .nginx/nginx.conf /etc/nginx/http.d/default.conf

# 8. Atur hak akses folder storage & cache agar Laravel bisa menulis log
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# 9. Buka port 80
EXPOSE 80

# 10. Jalankan service Nginx dan PHP-FPM secara bersamaan
CMD nginx && php-fpm

FROM php:8.2-fpm

# 1. Bersihkan cache bawaan dan perbarui indeks paket dengan toleransi network
RUN apt-get clean && rm -rf /var/lib/lists/*
RUN apt-get update -y || true

# 2. Install dependensi sistem & ekstensi PHP dengan proteksi kegagalan mirror
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    cron \
    curl \
    libpng-dev \
    libonig-dev \
    libxml-dev \
    zip \
    unzip \
    nginx \
    && apt-get clean && rm -rf /var/lib/lists/*

# 3. Install ekstensi PHP yang dibutuhkan Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# 4. Ambil Composer versi terbaru
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Tentukan direktori kerja di dalam container
WORKDIR /var/www

# 6. Salin seluruh file project ke dalam container
COPY . /var/www

# 7. Install dependensi composer (vendor) khusus untuk production
RUN composer install --no-interaction --optimize-autoloader --no-dev

# 8. Salin konfigurasi Nginx
COPY .nginx/nginx.conf /etc/nginx/sites-available/default

# 9. Atur hak akses (permissions) folder storage & cache agar Laravel bisa menulis log
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# 10. Buka port 80 untuk akses web
EXPOSE 80

# 11. Jalankan service Nginx dan PHP-FPM secara bersamaan
CMD service nginx start && php-fpm

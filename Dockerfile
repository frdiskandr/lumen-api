FROM php:8.2-fpm

RUN docker-php-ext-install pdo pdo_mysql
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /qpp

# Copy semua file ke dalam container
COPY . .

EXPOSE 9000
# Jalankan PHP-FPM
CMD ["php-fpm"]
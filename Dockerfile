FROM php:8.2-fpm

# install extension wajib Laravel
RUN docker-php-ext-install pdo pdo_mysql

# install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
FROM php:8.0-fpm
# FROM php:8.0-fpm

# ติดตั้ง dependency ที่จำเป็น
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libicu-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo_mysql \
        mysqli \
        zip \
        gd \
        mbstring \
        intl

# ติดตั้ง Composer (ล่าสุด)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# ตั้ง working directory
WORKDIR /var/www/html

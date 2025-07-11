FROM php:7.4-fpm

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
    libmagickwand-dev \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo_mysql \
        pdo_pgsql \
        mysqli \
        zip \
        gd \
        mbstring \
        intl \
        pcntl \
        soap \
        bcmath \
        exif \
        opcache

# ติดตั้ง PECL extensions (imagick, mongodb, xdebug) ทีละตัวเพื่อตรวจสอบข้อผิดพลาด
# RUN pecl install imagick && docker-php-ext-enable imagick || { echo 'Imagick installation failed'; exit 1; }
# RUN pecl install mongodb && docker-php-ext-enable mongodb || { echo 'MongoDB installation failed'; exit 1; }
# RUN pecl install xdebug && docker-php-ext-enable xdebug || { echo 'Xdebug installation failed'; exit 1; }

# ติดตั้ง Composer (เวอร์ชันล่าสุด)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# ตั้ง working directory
WORKDIR /var/www/html
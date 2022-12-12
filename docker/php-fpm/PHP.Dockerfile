FROM php:fpm

RUN apt-get update && apt-get install -y  libzip-dev zip \
    && docker-php-ext-install zip

RUN docker-php-ext-install pdo pdo_mysql && pecl install xdebug && docker-php-ext-enable xdebug

RUN apt-get update -y && apt-get install -y libxml2-dev \
    && docker-php-ext-install soap

RUN apt-get install -y libpq-dev unzip \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer --quiet --version=2.3.7

WORKDIR /app

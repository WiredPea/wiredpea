FROM php:7.0.15-fpm

RUN apt-get update && apt-get install -y openssl

RUN docker-php-ext-install -j$(nproc) pdo pdo_mysql

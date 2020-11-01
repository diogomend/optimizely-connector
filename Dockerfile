FROM php:7.1-fpm-alpine

WORKDIR /var/www/html

RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug-2.5.0 \
    && docker-php-ext-enable xdebug



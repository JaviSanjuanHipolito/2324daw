FROM php:fpm
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
COPY php/php.ini /usr/local/etc/php/
RUN apt update
RUN apt upgrade -y
RUN apt install wget
RUN wget -O phpunit.phar https://phar.phpunit.de/phpunit-10.phar
RUN chmod +x phpunit.phar
RUN mv phpunit.phar /usr/local/bin/phpunit

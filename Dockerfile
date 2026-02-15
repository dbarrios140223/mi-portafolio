FROM richarvey/nginx-php-fpm:latest

COPY . /var/www/html

ENV SKIP_COMPOSER 0
ENV WEBROOT /var/www/html/public
ENV APP_TYPE laravel

EXPOSE 80
FROM richarvey/nginx-php-fpm:latest

COPY . /var/www/html

ENV SKIP_COMPOSER 0
ENV WEBROOT /var/www/html/public
ENV APP_TYPE laravel

EXPOSE 80

RUN touch /var/www/html/database/database.sqlite
RUN chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
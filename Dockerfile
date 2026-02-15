FROM richarvey/nginx-php-fpm:latest
COPY . /var/www/html

# Estas variables le dicen al servidor que instale las librerías automáticamente
ENV SKIP_COMPOSER 0
ENV WEBROOT /var/www/html/public
ENV APP_TYPE laravel

# Permisos y base de datos
RUN touch /var/www/html/database/database.sqlite
RUN chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# Comando para instalar librerías al construir
RUN composer install --no-dev --optimize-autoloader

EXPOSE 80
FROM richarvey/nginx-php-fpm:latest
COPY . /var/www/html

# Variables de entorno para que Render sepa que es Laravel
ENV SKIP_COMPOSER 0
ENV WEBROOT /var/www/html/public
ENV APP_TYPE laravel

# Crear la base de datos y dar permisos de escritura
RUN touch /var/www/html/database/database.sqlite
RUN chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# INSTALAR LAS LIBRERÍAS (Esto arregla el error de autoload.php)
RUN composer install --no-dev --optimize-autoloader

EXPOSE 80
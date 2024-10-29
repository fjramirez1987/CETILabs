# Dockerfile
FROM php:8.0-apache

# Copiar el contenido del sitio web al contenedor
COPY ./html /var/www/html/

# Configurar permisos para la carpeta de Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

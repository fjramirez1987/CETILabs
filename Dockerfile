# Dockerfile
FROM php:8.0-apache

# Copiar el contenido del sitio web al contenedor
COPY ./html /var/www/html/

# Cambiar la propiedad de los archivos y carpetas a www-data
RUN chown -R www-data:www-data /var/www/html
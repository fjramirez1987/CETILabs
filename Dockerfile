# Dockerfile
FROM php:8.0-apache

# Copiar el contenido del sitio web al contenedor
COPY ./html /var/www/html/

# Cambiar la propiedad de los archivos y carpetas a www-data
RUN chown -R www-data:www-data /var/www/html

# Cambiar permisos de las carpetas a 755
RUN chmod -R 755 /var/www/html

# Cambiar permisos de los archivos .db a 666
RUN find /var/www/html -name "*.db" -exec chmod 666 {} \;

# Cambiar permisos de las carpetas que contienen archivos .db a 777
RUN find /var/www/html -name "*.db" -exec sh -c 'chmod 777 "$(dirname "$1")"' _ {} \;
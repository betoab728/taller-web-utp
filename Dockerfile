# Usar la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Copiar los archivos de tu página al directorio raíz de Apache
COPY . /var/www/html/

# Establecer permisos (opcional, depende de tu proyecto)
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80

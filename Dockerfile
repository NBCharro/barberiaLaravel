FROM php:8.1-apache

# Instalar dependencias
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    unzip \
    npm \
    && docker-php-ext-install pdo_mysql zip

# Instalar Node.js 14
RUN curl -fsSL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get install -y nodejs

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copiar archivos de la aplicación
COPY . /var/www/html

# Establecer permisos adecuados
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html/storage
RUN chmod -R 755 /var/www/html/bootstrap/cache
RUN chmod -R 755 /var/www/html

# Configurar el directorio de trabajo
WORKDIR /var/www/html

# Habilitar la extension bcmath en el entorno de PHP
RUN docker-php-ext-install bcmath

# Limpiar y compilar el proyecto
RUN rm -rf vendor node_modules
RUN composer update --with-all-dependencies
RUN composer install
RUN npm ci
RUN npm run build

# Configurar Apache para escuchar en todas las interfaces en el puerto proporcionado por Railway
RUN sed -i 's/Listen 80/Listen 80/' /etc/apache2/ports.conf
RUN sed -i 's/<VirtualHost \*:80>/<VirtualHost *:80>/' /etc/apache2/sites-available/000-default.conf

# Exponer el puerto 80 para el servidor Apache
EXPOSE 80

# Copiar el archivo de configuración de Apache
COPY laravel.conf /etc/apache2/sites-available/000-default.conf

# Habilitar la reescritura de URL en Apache
RUN a2enmod rewrite

# Configurar el nombre de dominio completamente calificado en Apache
RUN echo "ServerName www.barberialaravel.ovh" >> /etc/apache2/apache2.conf

# Comando de inicio del contenedor
CMD ["apache2-foreground"]

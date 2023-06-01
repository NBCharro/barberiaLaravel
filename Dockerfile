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

# Instalar dependencias de Composer
RUN composer update --with-all-dependencies

# Instalar dependencias de Composer
RUN composer install

# Instalar dependencias de NPM
RUN npm install

# Generar el archivo de configuración de la aplicación
RUN cp .env.example .env

# Generar la clave de la aplicacion
RUN php artisan key:generate

# Compilar el proyecto
RUN npm run build

# Exponer el puerto 80 para el servidor Apache
EXPOSE 80

# Copiar el archivo de configuración de Apache
COPY laravel.conf /etc/apache2/sites-available/000-default.conf

# Habilitar la reescritura de URL en Apache
RUN a2enmod rewrite

# Comando de inicio del contenedor
CMD ["apache2-foreground"]

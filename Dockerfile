FROM php:8.2-apache

# Habilita mod_rewrite de Apache
RUN a2enmod rewrite

# Instala dependencias del sistema necesarias para extensiones PHP
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    zlib1g-dev \
    libonig-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-configure zip \
    && docker-php-ext-install \
        intl \
        pdo \
        pdo_mysql \
        zip \
        mbstring \
        opcache

# Establece el directorio raíz de Apache en /public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

EXPOSE 80

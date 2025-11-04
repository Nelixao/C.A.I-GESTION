# Dockerfile
FROM php:8.2-apache-bookworm

# Apache
RUN a2enmod rewrite headers expires

# Fuentes APT sólo HTTPS y sin duplicados, deps del sistema y extensiones PHP
RUN set -eux; \
  rm -f /etc/apt/sources.list.d/debian.sources; \
  printf '%s\n' \
    'deb https://deb.debian.org/debian bookworm main' \
    'deb https://deb.debian.org/debian bookworm-updates main' \
    'deb https://security.debian.org/debian-security bookworm-security main' \
    > /etc/apt/sources.list; \
  apt-get update; \
  apt-get install -y --no-install-recommends \
    libicu-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    zlib1g-dev \
    ca-certificates \
    libonig-dev \ 
  ; \
  docker-php-ext-configure intl; \
  docker-php-ext-configure zip; \
  docker-php-ext-install intl pdo pdo_mysql zip mbstring opcache; \
  rm -rf /var/lib/apt/lists/*

# DocumentRoot => /public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN set -eux; \
  sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf; \
  if [ -f /etc/apache2/sites-available/default-ssl.conf ]; then \
    sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/default-ssl.conf; \
  fi

WORKDIR /var/www/html
EXPOSE 80

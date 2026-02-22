# Dockerfile
# Construcción nativa ARM64 - Bypass de caché
FROM php:8.2-apache

# Dependencias críticas del SO
RUN apt-get update && apt-get install -y \
    libzip-dev libpng-dev libicu-dev libxml2-dev \
    ghostscript curl \
    && docker-php-ext-install zip gd intl soap mysqli opcache exif \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Copiamos la configuración de producción nativa de PHP
RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini

# Inyectamos métricas de alto rendimiento directamente en el archivo maestro
RUN echo "memory_limit = 512M" >> /usr/local/etc/php/php.ini \
    && echo "max_execution_time = 120" >> /usr/local/etc/php/php.ini \
    && echo "opcache.enable = 1" >> /usr/local/etc/php/php.ini \
    && echo "opcache.memory_consumption = 256" >> /usr/local/etc/php/php.ini \
    && echo "max_input_vars = 5000" >> /usr/local/etc/php/php.ini

RUN a2enmod rewrite

# Descarga inmutable desde GitHub
RUN curl -L https://github.com/moodle/moodle/archive/refs/tags/v4.3.3.tar.gz | tar -xz -C /var/www/html/ --strip-components=1 \
    && chown -R www-data:www-data /var/www/html \
    && mkdir /var/www/moodledata \
    && chown -R www-data:www-data /var/www/moodledata

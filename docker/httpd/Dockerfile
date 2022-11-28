FROM php:7.2-apache

RUN apt-get update && apt-get install -y --no-install-recommends \
    gettext \
    locales-all \
    ssl-cert \
  && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install gettext

RUN a2enmod rewrite ssl

COPY httpd.conf /etc/apache2/sites-available/getgnulinux.conf

RUN a2dissite 000-default
RUN a2ensite getgnulinux

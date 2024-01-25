FROM php:8.1-apache

RUN apt-get update && apt-get install -y libapache2-mod-php8.1 || true

RUN docker-php-ext-install pdo_mysql
RUN service apache2 restart

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

EXPOSE 80

ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
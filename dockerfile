FROM php:7.2-apache

ADD ./files /var/www/html/

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf && a2enmod rewrite && service apache2 restart

EXPOSE 80

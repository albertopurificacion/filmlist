FROM php:7.2-apache

COPY ./files /var/www/html/

COPY my-apache-site.conf /etc/apache2/sites-available/my-apache-site.conf

RUN a2enmod rewrite && a2dissite 000-default.conf && a2ensite my-apache-site.conf && service apache2 restart

EXPOSE 80

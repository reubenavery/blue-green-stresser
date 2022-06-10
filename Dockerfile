FROM php:7.4-apache
COPY www/* /var/www/html/
COPY ./conf/status.conf /etc/apache2/mods-available/
COPY ./conf/charset.conf /etc/apache2/conf-available/

ARG COLOR
ENV COLOR=${COLOR}

#change default port from 80 to 8080
EXPOSE 8080
COPY ./conf/ports.conf /etc/apache2/
COPY ./conf/000-default.conf /etc/apache2/sites-available/

RUN mkdir -p /var/run/apache2/ && chmod -R 777 /var/run/apache2/
RUN mkdir -p /var/log/apache2 && chmod -R 777 /var/log/apache2/
RUN mkdir -p /var/lock/apache2 && chmod -R 777 /var/lock/apache2

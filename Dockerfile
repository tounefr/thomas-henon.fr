FROM alpine:3.4

MAINTAINER Thomas Henon <contact@toune.fr>

RUN apk add --update \
    php5-fpm \
    php5-apcu \
    php5-ctype \
    php5-curl \
    php5-dom \
    php5-gd \
    php5-iconv \
    php5-imagick \
    php5-json \
    php5-intl \
    php5-mcrypt \
    php5-mysql \
    php5-opcache \
    php5-openssl \
    php5-pdo \
    php5-pdo_mysql \
    php5-mysqli \
    php5-xml \
    php5-zlib \
    php5-phar \
    php5-sqlite3 \
    php5-pdo_sqlite \
    curl \
    git

#RUN rm -rf /var/cache/apk/* && rm -rf /tmp/*

RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

ADD php/symfony.ini /etc/php5/fpm/conf.d/
ADD php/symfony.ini /etc/php5/cli/conf.d/
ADD php/symfony.pool.conf /etc/php5/fpm.d/

COPY symfony /var/www/symfony

WORKDIR /var/www/symfony
RUN cd /var/www/symfony

RUN composer install

RUN touch var/data/data.sqlite

# install database dev env
RUN php bin/console -e=dev doctrine:database:create
RUN php bin/console -e=dev doctrine:schema:create
RUN php bin/console -e=dev doctrine:fixtures:load -n

# php permissions 
RUN chown 65534:65534 -R /var/www/
RUN chmod 775 -R /var/www

# nginx permissions
RUN chmod 777 -R /var/www/symfony/web/

# unit tests
RUN wget https://phar.phpunit.de/phpunit.phar && chmod +x phpunit.phar && mv phpunit.phar /usr/local/bin/phpunit
RUN phpunit src/AppBundle

CMD ["php-fpm", "-F"]

EXPOSE 9000

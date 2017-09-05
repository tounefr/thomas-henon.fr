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

#RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

ADD php/symfony.ini /etc/php5/fpm/conf.d/
ADD php/symfony.ini /etc/php5/cli/conf.d/
ADD php/symfony.pool.conf /etc/php5/fpm.d/

COPY symfony /var/www/symfony

WORKDIR /var/www/symfony
RUN cd /var/www/symfony

# install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin

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
RUN curl --insecure https://phar.phpunit.de/phpunit-6.3.0.phar -o /usr/local/bin/phpunit && \
    chmod +x /usr/local/bin/phpunit && \
    echo "b6f83f6430ffba4aad1945b393bb83969e62442b02d833007aac7be2439068a4 /usr/local/bin/phpunit" | sha256sum -c && \
    exit 1

#RUN phpunit src/AppBundle/Tests

CMD ["php-fpm", "-F"]

EXPOSE 9000

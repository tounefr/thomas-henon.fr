FROM ubuntu:16.04

ENV LANG="en_US.UTF-8" \
    LC_ALL="en_US.UTF-8" \
    LANGUAGE="en_US.UTF-8" \
    TERM="xterm" \
    DEBIAN_FRONTEND="noninteractive" \
#    SYMFONY_ALLOW_APPDEV=1 \
    SYMFONY_ENV=prod \
    NODE_VERSION=6.9.4 \
    COMPOSER_ALLOW_SUPERUSER=1

EXPOSE 80

RUN apt-get update -yq && \
    apt-get install -qy software-properties-common language-pack-en-base && \
    export LC_ALL=en_US.UTF-8 && \
    export LANG=en_US.UTF-8 && \
    add-apt-repository ppa:ondrej/php && \
    apt-get update -yq && \
    apt-get install --no-install-recommends -qy \
        ca-certificates \
        cron \
        curl \
        nano \
        vim \
        nginx \
        git \
        graphviz \
        mysql-client \
        php7.1 \
        php7.1-bcmath \
        php7.1-common \
        php7.1-curl \
        php7.1-dom \
        php7.1-fpm \
        php7.1-gd \
        php7.1-iconv \
        php7.1-intl \
        php7.1-json \
        php7.1-mbstring \
        php7.1-mcrypt \
        php7.1-mysql \
        php7.1-pdo \
        php7.1-phar \
        php7.1-sqlite \
        php7.1-xdebug \
        php7.1-xml \
        php7.1-zip \
        php-apcu \
        php-uuid \
        supervisor \
        tzdata \
        wget && \

    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* && \

    cp /usr/share/zoneinfo/Europe/Paris /etc/localtime && echo "Europe/Paris" > /etc/timezone && \

    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \

    curl -L -o /tmp/nodejs.tar.gz https://nodejs.org/dist/v${NODE_VERSION}/node-v${NODE_VERSION}-linux-x64.tar.gz && \
    tar xfvz /tmp/nodejs.tar.gz -C /usr/local --strip-components=1 && \
    rm -f /tmp/nodejs.tar.gz && \
    npm install yarn -g && \

    mkdir /run/php

COPY ./docker/prod/php.ini /etc/php/7.1/fpm/php.ini
COPY ./docker/prod/pool.conf /etc/php/7.1/fpm/pool.d/www.conf
COPY ./docker/prod/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/prod/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

COPY ./app /www
WORKDIR /www

RUN chown www-data:www-data -R /www && \
	chmod 775 -R /www && \
	chmod 777 -R /www/var

RUN yarn install && yarn build-dev
RUN composer install --no-scripts

CMD ["supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

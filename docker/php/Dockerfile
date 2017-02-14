FROM php:7.1-cli

ENV COMPOSER_HOME /usr/local/.composer
RUN apt-get update && \
    apt-get install -y --no-install-recommends git unzip && \
    rm -rf /var/lib/apt/lists/* && \
    mkdir ${COMPOSER_HOME} && \
    chmod -R 777 ${COMPOSER_HOME} && \
    php -r "readfile('https://getcomposer.org/installer');" | php && \
    mv composer.phar /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer

WORKDIR /php

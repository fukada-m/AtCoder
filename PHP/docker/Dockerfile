FROM php:8.0-apache

COPY composer.json /home/

# パッケージリスト更新後にパッケージをインストール
RUN apt-get update && apt-get install -y git zip unzip && \
    # xdebug拡張のインストール
    pecl install xdebug && \
    docker-php-ext-enable xdebug
# composerのインストール
COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /home

RUN composer install

WORKDIR /var/www/html

FROM php:7.4-cli
# パッケージリスト更新後にパッケージをインストール
RUN apt-get update && apt-get install -y git zip unzip
# composerのインストール
COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /usr/src

# どんなdockerイメージを利用して構築をするか
FROM php:7.4-apache

# 設定ファイルをdockerコンテナ内のPHP、Apacheに読み込ませる
ADD php.ini /usr/local/etc/php/
ADD 000-default.conf /etc/apache2/sites-enabled/

# Composerのインストール
COPY --from=composer /usr/bin/composer /usr/bin/composer
#RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer
# PEARのインストール（xdebug使用のため）
RUN cd /usr/local/bin && curl https://pear.php.net/go-pear.phar -o go-pear.phar && php ./go-pear.phar

# ミドルウェアインストール
RUN apt-get update \
#&& apt-get install php-pear \
#&& pecl install xdebug \
&& apt-get install -y \
git \
zip \
unzip \
vim \
libpng-dev \
libpq-dev \
nodejs \
npm \
&& docker-php-ext-install pdo_mysql
#&& docker-php-ext-enable xdebug

#コンテナ内にアクセスした際のデフォルトディレクトリを設定
WORKDIR /var/www/html/curry_potal

# vendor配下をボリュームトリックで同期させないため、インストール
#ENV COMPOSER_ALLOW_SUPERUSER 1
#ENV COMPOSER_NO_INTERACTION 1
#CMD composer install

# Laravelで必要になるmodRewriteを有効化する
RUN mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
RUN /bin/sh -c a2enmod rewrite
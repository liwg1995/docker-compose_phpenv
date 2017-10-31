FROM php:7.0-fpm

ADD sources.list  /etc/apt/sources.list

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
		      libfreetype6-dev \
              libjpeg62-turbo-dev \
 		      libpng12-dev \
              vim \
              && docker-php-ext-install pdo_mysql \
 			  && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
 			  && docker-php-ext-install gd \
              && rm -r /var/lib/apt/lists/*

COPY ./config/php.ini /usr/local/etc/php/conf.d/
ADD composer.phar /usr/local/bin/composer
RUN chmod 755 /usr/local/bin/composer

EXPOSE 9000

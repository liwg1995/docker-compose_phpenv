FROM ubuntu:16.04

RUN apt-get update && apt-get install -y software-properties-common language-pack-en-base \
    && LC_ALL=en_US.UTF-8 add-apt-repository -y ppa:ondrej/php \
    && apt-get update \
    && apt-get install -y php-xml php7.0 php7.0-fpm php7.0-mysql mcrypt php7.0-gd curl \
       php7.0-curl php-redis php7.0-mbstring supervisor vim php7.0-bcmath php7.0-cli \
       php7.0-mcrypt php7.0-opcache php7.0-tidy php7.0-json php-geoip php7.0-zip php-memcached \
       php7.0-xml php-igbinary \
    && mkdir /run/php \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN sed -i -e 's/listen = \/run\/php\/php7.0-fpm.sock/listen = 0.0.0.0:9000/g' /etc/php/7.0/fpm/pool.d/www.conf \
    && sed -i -e 's/;daemonize = yes/daemonize = no/g' /etc/php/7.0/fpm/php-fpm.conf

WORKDIR /var/www

EXPOSE 9000

CMD ["/usr/bin/supervisord"]
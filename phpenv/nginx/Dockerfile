FROM nginx:latest

ADD ../php-fpm/sources.list /etc/apt/sources.list

RUN apt-get update && apt-get install -y vim \
                   && rm -r /var/lib/apt/lists/* \

EXPOSE 80

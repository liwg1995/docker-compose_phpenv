FROM nginx:latest

RUN mkdir -p /var/www \
    && chown -R nginx:nginx /var/www && apt-get update && apt-get install vim -y \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY ./dev.conf /etc/nginx/conf.d/dev.conf

WORKDIR /var/www

EXPOSE 80
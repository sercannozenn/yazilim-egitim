FROM php:8.2-fpm-alpine

RUN apk add --no-cache nginx supervisor wget

RUN mkdir -p /run/nginx

COPY docker/nginx.conf /etc/nginx/nginx.conf

RUN mkdir -p /app
COPY . /app

RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#RUN composer global require laravel/installer
RUN cd /app && \
    /usr/local/bin/composer install --no-dev


RUN chown -R www-data: /app

CMD sh /app/docker/startup.sh

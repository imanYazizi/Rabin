FROM serversideup/php:8.1-fpm-nginx

RUN apt-get update \
    && apt-get install -y --no-install-recommends php8.1-pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* \

WORKDIR /var/www/html

COPY run /etc/services.d/php-fpm/

COPY . .

RUN composer install --no-dev --ignore-platform-reqs

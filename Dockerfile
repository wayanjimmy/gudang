FROM composer:1.7 as vendor

COPY database/ database/
COPY composer.json composer.json
COPY composer.lock composer.lock

RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --optimize-autoloader \
    --prefer-dist


FROM node:12.14.0 as frontend

RUN mkdir -p /app/public

COPY package.json webpack.mix.js yarn.lock /app/
COPY resources/js/ /app/resources/js/
COPY resources/sass/ /app/resources/sass/

WORKDIR /app
RUN yarn install && yarn production

FROM php:7.4-fpm
LABEL maintainer="Alireza faghani <faghani.a@gmail.com>"

RUN apt-get update && apt-get install -y git zip unzip

RUN curl --silent --show-error --fail --location \
      --header "Accept: application/tar+gzip, application/x-gzip, application/octet-stream" -o - \
    "https://caddyserver.com/download/linux/amd64?plugins=http.expires,http.realip&license=personal&telemetry=off" \
    | tar --no-same-owner -C /usr/bin/ -xz caddy \
    && chmod 0755 /usr/bin/caddy \
    && /usr/bin/caddy -version \
    && docker-php-ext-install mbstring pdo pdo_mysql opcache

WORKDIR /var/www/

COPY . /var/www/

COPY --from=vendor /app/vendor/ /var/www/vendor/
COPY --from=frontend /app/public/js/ /var/www/public/js/
COPY --from=frontend /app/public/css/ /var/www/public/css/
COPY --from=frontend /app/mix-manifest.json /var/www/public/mix-manifest.json

COPY .docker/Caddyfile /etc/Caddyfile
COPY .docker/config/* $PHP_INI_DIR/conf.d/

RUN chown -R www-data:www-data /var/www/

# laravel setup
RUN mv .env.example .env
RUN php artisan migrate \
    && php artisan config:cache \
    && php artisan route:cache

EXPOSE 2015

CMD ["/usr/bin/caddy", "-agree=true", "-conf=/etc/Caddyfile"]

FROM docker.io/library/php:8.5.1RC2-zts-alpine3.23

RUN apk --no-cache add \
  icu-dev \
  gettext \
  gettext-dev

RUN docker-php-ext-configure intl \
  && docker-php-ext-configure gettext \
  && docker-php-ext-install \
  intl \
  gettext

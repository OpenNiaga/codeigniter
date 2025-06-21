FROM debian:bookworm
RUN apt-get update && apt-get install -y \
  curl unzip php-cli php-curl php-intl php-mbstring php-xml \
  php-zip php-gd php-mysql
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

FROM ubuntu:latest

MAINTAINER Tim Rodger <tim.rodger@gmail.com>

EXPOSE 80

RUN apt-get update -qq && \
    apt-get install -y \
    nginx \
    curl \
    libxml2 \
    wget \
    php5 \
    php5-cli \
    php5-fpm \
    php5-curl

RUN curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer

CMD ["php5-fpm && nginx"]

# Move application files into place
COPY code/ /home/cron/

WORKDIR /home/cron

# Install dependencies
RUN composer install --prefer-dist && \
    apt-get clean

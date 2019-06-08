FROM php:7-fpm

RUN apt-get update
RUN apt-get install -y \
            libjpeg-dev \
            libfreetype6-dev \
            libwebp-dev \
            libjpeg62-turbo-dev \
            libpng-dev

# PHP extensions
RUN apt-get update && apt-get install -y mysql-client
RUN docker-php-ext-configure gd \
        --with-freetype-dir=/usr/include/ \
        --with-jpeg-dir=/usr/include/
 #       --with-xpm-dir=/usr/include/ \
  #      --with-vpx-dir=/usr/include/
  RUN docker-php-ext-install pdo_mysql gd

# Kafka
RUN apt-get install -y librdkafka-dev
RUN pecl install rdkafka && docker-php-ext-enable rdkafka

# Supervisor
RUN apt-get install -y supervisor
ADD docker/application/config/supervisor/supervisord.conf /etc/supervisord.conf
ENTRYPOINT ["/usr/bin/supervisord", "-n", "-c",  "/etc/supervisord.conf"]
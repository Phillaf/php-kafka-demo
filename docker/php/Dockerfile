FROM php:8.2-fpm

RUN apt-get update --fix-missing \
    && apt-get install -y curl wget zip unzip git \
    && rm -rf /var/lib/apt/lists/*

# DEPENDENCIES
RUN apt-get update --fix-missing \
    && apt-get install -y  python \
    && rm -rf /var/lib/apt/lists/*

# KAFKA
RUN git clone --depth 1 --branch v0.11.1 https://github.com/edenhill/librdkafka.git \
    && ( \
        cd librdkafka \
        && ./configure \
        && make \
        && make install \
    ) \
    && pecl install rdkafka \
    && echo "extension=rdkafka.so" > /usr/local/etc/php/conf.d/rdkafka.ini

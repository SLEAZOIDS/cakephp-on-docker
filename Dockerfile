FROM ubuntu
RUN apt-get update \
&&  apt-get install -y \
        composer \
        curl \
        php \
        php-intl \
        php-mbstring \
        php-mysql \
        php7.0-xml \
        unzip \
        zip
RUN curl -s https://getcomposer.org/installer | php

RUN mkdir /code
WORKDIR /code
ADD . /code/

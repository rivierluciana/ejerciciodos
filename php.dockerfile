FROM php:7.4-fpm-alpine

RUN apk add --update --no-cache autoconf automake make gcc g++ wget vim freetype libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev zip libzip-dev
RUN docker-php-ext-configure gd \
    --with-freetype=/usr/include/ \
    --with-jpeg=/usr
RUN docker-php-ext-install gd mysqli calendar zip

RUN docker-php-ext-configure opcache --enable-opcache \
    && docker-php-ext-install opcache

RUN apk add tzdata
RUN ln -snf /usr/share/zoneinfo/America/Argentina/Mendoza /etc/localtime && echo America/Argentina/Mendoza > /etc/timezone
RUN apk del tzdata
RUN echo date.timezone = \"America/Argentina/Mendoza\" >> /usr/local/etc/php/conf.d/php.ini
RUN echo post_max_size = "15M" >> /usr/local/etc/php/conf.d/php.ini
RUN echo upload_max_filesize = "15M"  >> /usr/local/etc/php/conf.d/php.ini
ADD . /var/www
RUN chown -R www-data:www-data /var/www
FROM php:8.3.17-fpm

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV TZ Asia/Tokyo
RUN apt-get update && apt-get install -y gnupg2
RUN curl -sL https://deb.nodesource.com/setup_current.x | bash -
RUN apt-get update && apt-get install -y \
        libssl-dev \
        zlib1g-dev \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        wget \
        nodejs \
        sendmail \
        libicu-dev \
        make \
        g++ \
        gcc \
        unzip \
        libzip-dev \
        libonig-dev \
        libmagickwand-dev \
        pkg-config \
        imagemagick

RUN docker-php-ext-install -j$(nproc) iconv pdo_mysql mysqli intl zip gd

RUN docker-php-ext-configure gd \
    --with-jpeg=/usr/include/ \
    --with-freetype=/usr/include/

RUN wget https://pecl.php.net/get/imagick-3.7.0.tgz && \
    tar xzvf imagick-3.7.0.tgz && cd imagick-3.7.0 && \
    phpize && ./configure && \
    make && make install && \
    docker-php-ext-enable imagick

RUN apt-get update \
    && apt-get install -y ffmpeg \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && chmod +x /usr/local/bin/composer

RUN npm install -g npm@latest

COPY ./php.ini /usr/local/etc/php/
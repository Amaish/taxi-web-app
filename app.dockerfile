FROM php:7.2.8-fpm

MAINTAINER CodeMobile <olushola@codemobile.ng>

#
#--------------------------------------------------------------------------
# Software's Installation
#--------------------------------------------------------------------------
#
# Installing tools and PHP extentions using "apt", "docker-php", "pecl",
#

# Install "curl", "libmemcached-dev", "libpq-dev", "libjpeg-dev",
#         "libpng-dev", "libfreetype6-dev", "libssl-dev", "libmcrypt-dev",
RUN apt-get update --fix-missing \
  && apt-get install -y --no-install-recommends \
    curl \
    libmemcached-dev \
    libz-dev \
    libpq-dev \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libssl-dev \
    libmcrypt-dev \
    libzip-dev \
    zip \
    unzip \
  && rm -rf /var/lib/apt/lists/*
 
# Install the PHP pdo_mysql extention
RUN docker-php-ext-configure pdo_mysql \
  && docker-php-ext-configure zip --with-libzip \
  && docker-php-ext-install mysqli pdo pdo_mysql zip \
  && docker-php-ext-enable pdo_mysql mysqli \
  # Install the PHP gd library
  && docker-php-ext-configure gd \
    --with-jpeg-dir=/usr/lib \
    --with-freetype-dir=/usr/include/freetype2 && \
    docker-php-ext-install gd

#composer install dependencies
#RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" 
#RUN php composer-setup.php
#RUN php -r "unlink('composer-setup.php');"
#RUN mv composer.phar /usr/local/bin/composer
#RUN composer -v

#Add user
#RUN useradd -ms /bin/bash porte

# switch to user
#USER porte

# create directory
#RUN mkdir porte
#WORKDIR /porte
#COPY . /porte

# Install package
#RUN composer install && composer update
#change permission for storage folder

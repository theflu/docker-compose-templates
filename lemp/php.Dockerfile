FROM php:8.3-fpm

# Update system
RUN apt-get update && apt-get upgrade -y

# Install packages
#RUN apt-get install -y 

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/hmtl

CMD ["php-fpm"]
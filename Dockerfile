FROM php:8.2-fpm

# Copy composer.lock and composer.json
COPY src/composer.lock src/composer.json /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libzip-dev \
    libgd-dev \

#Mongo
RUN apt-get update && \
    apt-get install -y autoconf pkg-config libssl-dev git unzip libzip-dev zlib1g-dev && \
    pecl install mongodb && docker-php-ext-enable mongodb && \
    pecl install xdebug && docker-php-ext-enable xdebug && \
    docker-php-ext-install -j$(nproc) zip

#Mine

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-external-gd
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000

EXPOSE 27017

CMD ["php-fpm"]
FROM php:8.3.2

# Install necessary dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && rm -rf /var/lib/apt/lists/*

# Install PDO extension
RUN docker-php-ext-install pdo

# Install PDO PostgreSQL extension
RUN docker-php-ext-configure pdo_pgsql --with-pdo-pgsql \
    && docker-php-ext-install pdo_pgsql
WORKDIR /var/www/html

COPY . . 

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

CMD [ "php", "artisan", "serve", "--host=0.0.0.0", "--port=8000" ]

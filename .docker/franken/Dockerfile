FROM dunglas/frankenphp

RUN install-php-extensions \
    pcntl

RUN apt-get update && apt-get install -y \
      libfreetype6-dev \
      libjpeg62-turbo-dev \
      libpng-dev \
      libpq-dev \
      libzip-dev \
      zip \
      unzip \
      git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo pdo_mysql mysqli zip bcmath pdo_pgsql pgsql \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instala o Composer 2
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');" \
    && composer self-update --2

COPY . /app

# Define o diretório de trabalho
WORKDIR /app

# Instala as dependências do Composer
RUN composer install --no-dev --optimize-autoloader

# Ajusta as permissões
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache

ENTRYPOINT ["php", "artisan", "octane:frankenphp"]

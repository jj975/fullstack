FROM php:8.3-rc-apache

# Встановлення розширення MySQLi
RUN docker-php-ext-install mysqli

# Копіювання конфігураційного файлу для Apache
COPY apache2.conf /etc/apache2/apache2.conf

# Перезавантаження Apache після встановлення розширення
RUN service apache2 restart

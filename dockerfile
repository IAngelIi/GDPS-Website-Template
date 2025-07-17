FROM php:8.2-apache

# Копируем файлы проекта в директорию, которую обслуживает Apache
COPY . /var/www/html/

# Открываем порт 80
EXPOSE 80
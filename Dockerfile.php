# เลือก base image ของ PHP ที่ต้องการ (ในที่นี้ใช้ PHP 8.1 กับ Apache)
FROM php:8.1-apache

# เปิดใช้ mod_rewrite สำหรับ URL routing
RUN a2enmod rewrite

# ติดตั้ง dependencies ที่ PHP อาจจะต้องการ (เช่น GD, MySQL, ฯลฯ)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# คัดลอกโค้ดจากเครื่องคุณไปยัง Docker container
COPY . /var/www/html/

# ตั้ง directory ที่ทำงาน
WORKDIR /var/www/html

# ใช้ Composer ในการติดตั้ง dependencies ที่โปรเจคต้องการ
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer install

# กำหนด port ที่จะเปิดใช้งาน (เช่น port 80 สำหรับ Apache)
EXPOSE 80

# กำหนดคำสั่งเริ่มต้นของ container ให้รัน Apache
CMD ["apache2-foreground"]

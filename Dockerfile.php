# ใช้ PHP image
FROM php:8.1-apache

# เปิดใช้งาน mod_rewrite สำหรับ URL routing
RUN a2enmod rewrite

# คัดลอกโค้ดจากเครื่องคุณไปยัง container
COPY . /var/www/html/

# ตั้ง directory ที่ทำงาน
WORKDIR /var/www/html

# ติดตั้ง dependencies ที่ต้องการ (ถ้ามี)
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd

# เปิด port 80
EXPOSE 80

# คำสั่งเริ่มต้น (start server)
CMD ["apache2-foreground"]

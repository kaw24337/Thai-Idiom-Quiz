# PHP 8.4 + Apache
FROM php:8.4-apache

# ติดตั้ง mysqli และ PDO MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# คัดลอกไฟล์โปรเจกต์ไปที่ Apache root
COPY . /var/www/html/

# ตั้ง working directory
WORKDIR /var/www/html

# เปิด port สำหรับ Render (Render กำหนด $PORT)
EXPOSE 10000

# ใช้ Apache ใน foreground พร้อมกำหนด port จาก environment
CMD ["sh", "-c", "sed -i \"s/Listen 80/Listen ${PORT}/\" /etc/apache2/ports.conf && apache2-foreground"]

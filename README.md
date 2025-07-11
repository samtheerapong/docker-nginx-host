# Web Server ด้วย Docker Compose

โปรเจกต์นี้เป็นตัวอย่างการตั้งค่า Web Server โดยใช้ Docker Compose สำหรับการพัฒนาเว็บไซต์ด้วย Nginx, PHP, MySQL/MariaDB และ phpMyAdmin สามารถเลือกเวอร์ชันของ PHP และฐานข้อมูลได้ตามต้องการ เหมาะสำหรับการพัฒนาและทดสอบเว็บแอปพลิเคชันในเครื่องของคุณ

## โครงสร้างโปรเจกต์

```
web-server/
├── app/                # (ว่าง) สำหรับโค้ดแอปพลิเคชันเพิ่มเติม
├── config/             # ไฟล์คอนฟิก Docker และบริการต่าง ๆ
│   ├── mariadb103/     # Dockerfile สำหรับ MariaDB 10.3
│   ├── mariadb104/     # Dockerfile สำหรับ MariaDB 10.4
│   ├── mariadb105/     # Dockerfile สำหรับ MariaDB 10.5
│   ├── mariadb106/     # Dockerfile สำหรับ MariaDB 10.6
│   ├── mysql57/        # Dockerfile สำหรับ MySQL 5.7
│   ├── mysql8/         # Dockerfile สำหรับ MySQL 8
│   ├── nginx/          # คอนฟิก Nginx (default.conf)
│   ├── php/            # php.ini (ตั้งค่า PHP)
│   ├── php74/          # Dockerfile สำหรับ PHP 7.4
│   ├── php8/           # Dockerfile สำหรับ PHP 8.0
│   └── php83/          # Dockerfile สำหรับ PHP 8.3
├── docker-compose.yml  # ไฟล์หลักสำหรับรัน Docker Compose
├── www/                # โฟลเดอร์เก็บไฟล์เว็บไซต์ (Document Root)
│   └── index.php       # ตัวอย่างไฟล์ PHP เริ่มต้น
```

## บริการที่มีในระบบ

- **nginx**: เว็บเซิร์ฟเวอร์สำหรับรับส่ง HTTP
- **php**: รัน PHP-FPM สามารถเลือกเวอร์ชันได้ (7.4, 8.0, 8.3)
- **mysql/mariadb**: ฐานข้อมูล เลือกเวอร์ชันได้ (MySQL 5.7, 8 หรือ MariaDB 10.3-10.6)
- **phpmyadmin**: เครื่องมือจัดการฐานข้อมูลผ่านเว็บ

## วิธีใช้งาน

1. สร้างไฟล์ `.env` ที่ root ของโปรเจกต์ โดยกำหนดค่าตัวแปร เช่น

```
COMPOSE_PROJECT_NAME=webserver
PHPVERSION=php8      # เลือก php74, php8, php83
DATABASE=mysql8      # เลือก mysql57, mysql8, mariadb103, mariadb104, mariadb105, mariadb106
HOST_MACHINE_UNSECURE_HOST_PORT=8080
HOST_MACHINE_MYSQL_PORT=3307
HOST_MACHINE_PMA_PORT=8888
MYSQL_ROOT_PASSWORD=yourpassword
MYSQL_DATABASE=dbname
MYSQL_USER=dbuser
MYSQL_PASSWORD=dbpassword
UPLOAD_LIMIT=256M
MEMORY_LIMIT=256M
```

2. สั่งรัน Docker Compose

```
docker-compose up -d
```

3. เปิดเว็บเบราว์เซอร์ไปที่
- เว็บไซต์: http://localhost:8080 (หรือพอร์ตที่ตั้งไว้)
- phpMyAdmin: http://localhost:8888 (หรือพอร์ตที่ตั้งไว้)

## ข้อมูลไฟล์สำคัญ

- `www/index.php` : ตัวอย่างไฟล์ PHP เริ่มต้น
  ```php
  <?= phpinfo() ?>
  ```
- `config/php/php.ini` : ตัวอย่างการตั้งค่า PHP
  ```ini
  upload_max_filesize = 512M
  post_max_size = 512M
  max_execution_time = 300
  memory_limit = 512M
  session.gc_maxlifetime = 1440
  ```
- `config/nginx/default.conf` : คอนฟิก Nginx สำหรับเว็บเซิร์ฟเวอร์

## หมายเหตุ
- สามารถเพิ่มไฟล์เว็บไซต์ของคุณในโฟลเดอร์ `www/`
- สามารถปรับแต่งไฟล์คอนฟิกต่าง ๆ ได้ตามต้องการ
- เหมาะสำหรับการพัฒนาและทดสอบเท่านั้น (ไม่แนะนำสำหรับ production)

---

**ผู้จัดทำ:**
- ผู้พัฒนา  : นายธีรพงศ์ ขันตา
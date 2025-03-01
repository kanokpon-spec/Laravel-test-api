<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## ค่าที่เอาไว้สำหรับทดสอบ Swagger Api

- Token : [token1 , token2 , token3]
- ProductSKU : [SKU123 , SKU456]

## 1.ข้อกำหนดเบื้องต้น:

- PHP: เวอร์ชันที่รองรับ Laravel (ตรวจสอบจาก composer.json)
- Composer: ตัวจัดการแพ็กเกจสำหรับ PHP
- Node.js และ npm: สำหรับจัดการแพ็กเกจ JavaScript (ถ้ามี)
- Git: สำหรับโคลนโปรเจกต์ (ถ้าใช้ Git)
- Visual Studio Code (VS Code): ตัวแก้ไขโค้ดที่แนะนำ

## 2. การโคลนโปรเจกต์:

- หากโปรเจกต์อยู่บน Git ให้ใช้คำสั่ง  เพื่อโคลนโปรเจกต์ลงเครื่องของคุณ
```bash
git clone <repository-url> 
```
- หากเป็นไฟล์ ZIP ให้แตกไฟล์ไปยังโฟลเดอร์ที่ต้องการ

## 3. การติดตั้ง Dependencies:

- เปิด Terminal หรือ Command Prompt ไปยังโฟลเดอร์โปรเจกต์
- รันคำสั่ง composer install เพื่อติดตั้ง Dependencies ของ PHP
```bash
composer install
```
### 4. การตั้งค่า Environment:

- คัดลอกไฟล์ .env.example เป็น .env โดยใช้คำสั่ง:
```bash
cp .env.example .env
```
- รันคำสั่ง php artisan key:generate เพื่อสร้าง Application key
```bash 
php artisan key:generate
```

## 5. การติดตั้ง Swagger:

- คำสั่งตามนี้:
```bash
php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
```

- Generate API documentation:
```bash
php artisan l5-swagger:generate
```
## 6. รัน Server และ Path เข้าดู Swagger

- รัน server ด้วยคำสั่ง php artisan serve :
```bash
php artisan serve
```

- หลังจากนั้นใน terminal จะบอก url ของเว็บเรา

```bash
http://127.0.0.1:8000 หรือ (domain)/api/documentation
```

ขอบพระคุณครับที่ได้เข้ามารับชม และให้โอกาสผมได้ทำผลงานนี้ 🙏🏻😊
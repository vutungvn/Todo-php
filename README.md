# 📌 Todo PHP

## 1. Giới thiệu

Đây là dự án được xây dựng bằng **Laravel Framework** – một PHP framework phổ biến theo mô hình **MVC (Model – View – Controller)**, hỗ trợ phát triển ứng dụng web nhanh, bảo mật và dễ mở rộng.

---

## 2. Yêu cầu hệ thống

Trước khi chạy dự án, máy của bạn cần cài đặt:

- PHP >= 8.x
- Composer
- MySQL / MariaDB
- Node.js & NPM (nếu dùng Vite, Tailwind, Vue, React…)
- Web server: Apache / Nginx (hoặc dùng server tích hợp của Laravel)

---

## 3. Cách chạy dự án Laravel

### Bước 1: Clone dự án

```bash
git clone <repo_url>
cd <project_name>
```

### Bước 2: Cài đặt thư viện PHP

```bash
composer install
```

### Bước 3: Tạo file môi trường

```bash
cp .env.example .env
```

Cấu hình lại trong file `.env`:

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

### Bước 4: Tạo App Key

```bash
php artisan key:generate
```

### Bước 5: Chạy migration (nếu có database)

```bash
php artisan migrate
```

(Nếu có dữ liệu mẫu)

```bash
php artisan db:seed
```

### Bước 6: Cài đặt frontend (nếu có)

```bash
npm install
npm run dev
```

### Bước 7: Chạy server

```bash
php artisan serve
```

Truy cập dự án tại: 👉 `http://127.0.0.1:8000`

---

## 4. Cấu trúc thư mục Laravel

### 📂 app/

Chứa **logic chính của ứng dụng**

- `Http/Controllers` : Xử lý request từ người dùng
- `Models` : Làm việc với database
- `Providers` : Service providers
- `Middleware` : Xử lý request trước khi vào controller

---

### 📂 routes/

Định nghĩa các route của hệ thống

- `web.php` : Route giao diện web
- `api.php` : Route cho API
- `auth.php` : Route xác thực (nếu dùng)

---

### 📂 resources/

Chứa tài nguyên giao diện

- `views/` : File Blade (.blade.php)
- `css/` : CSS / Tailwind
- `js/` : JavaScript, Vue, React

---

### 📂 database/

Quản lý database

- `migrations/` : Tạo bảng
- `seeders/` : Dữ liệu mẫu
- `factories/` : Sinh dữ liệu test

---

### 📂 public/

Thư mục public truy cập từ trình duyệt

- `index.php` : Entry point
- `assets/` : Ảnh, CSS, JS build

---

### 📂 config/

Chứa các file cấu hình của Laravel

- `app.php`, `database.php`, `mail.php`, ...

---

### 📂 storage/

Lưu trữ dữ liệu runtime

- `logs/` : Log hệ thống
- `framework/` : Cache, session, view

---

### 📂 vendor/

Thư viện do Composer quản lý (**không chỉnh sửa**)

---

## 5. Một số lệnh Artisan thường dùng

```bash
php artisan route:list
php artisan migrate
php artisan migrate:fresh --seed
php artisan make:controller UserController
php artisan make:model User -m
php artisan optimize:clear
```

---

## 6. Lưu ý

- Không commit file `.env`
- Phân quyền thư mục `storage` và `bootstrap/cache`

```bash
chmod -R 775 storage bootstrap/cache
```

---

## 7. Tài liệu tham khảo

- Laravel Docs: [https://laravel.com/docs](https://laravel.com/docs)

---

✍️ _Tác giả: Tùng DEV_

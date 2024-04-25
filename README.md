<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Câu lệnh Laravel Artisan cơ bản

Tài liệu này cung cấp hướng dẫn sử dụng các câu lệnh Artisan cơ bản trong Laravel để thực hiện các tác vụ phổ biến như tạo dự án, quản lý cơ sở dữ liệu, tối ưu hóa hiệu suất và tạo mã.

**1. Hiển thị phiên bản Laravel:**

```bash
php artisan --version
```

**2. Tạo dự án Laravel mới:**

```bash
php artisan make:project project-name
```

**3. Tạo khóa ứng dụng Laravel:**

```bash
php artisan key:generate
```

**4. Cập nhật Laravel:**

```bash
php artisan composer update
```

**5. Khởi động máy chủ web:**

```bash
php artisan serve
```

**6. Tạo cấu trúc cơ sở dữ liệu:**

```bash
php artisan migrate
```

**7. Xóa và tạo lại CSDL khi có thay đổi code-CSDL:**

```bash
php artisan migrate:refresh
```

**8. Chạy lại Laravel khi có sự thay đổi code:**

```bash
php artisan optimize
```

**9. Tạo một bộ điều khiển mới:**

```bash
php artisan make:controller controller-name
```

**Lưu ý:**

* Thay thế `project-name` bằng tên dự án của bạn.
* Thay thế `controller-name` bằng tên bộ điều khiển bạn muốn tạo.

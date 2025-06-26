### Phùng Tiến Đạt | MSV: 23010410

### Lớp: Thiết kế web nâng cao (CSE702051-1-3-24(COUR01.TH4))

# 📚 Project: Quản lý điểm danh (Students-attendance-tracking-system)

#### Hệ thống quản lý điểm danh được phát triển bằng **Laravel** kết hợp với **Livewire**, hỗ trợ quản lý học sinh, lớp học, điểm danh và theo dõi thống kê. <br>

---

## 🚀 Tính năng chính (Features Overview)

### 1. 🎭 User Roles & Authentication

-   Hệ thống phân quyền người dùng:
    -   **Admin**
    -   **Teacher**
-   Tích hợp hệ thống **Authentication** đầy đủ: `Login`, `Register`, `Logout`

### 2. 🎓 Students & Grade Management

-   **CRUD Students**: Thêm, Sửa, xoá, xem danh sách học sinh
-   **CRUD Grades**: Quản lý lớp học (grades)
-   **Phân bổ học sinh vào lớp** (Assign student to grades)

### 3. 🕒 Attendance Management

-   **Điểm danh học sinh** với 4 trạng thái:
    -   Present (có mặt)
    -   Absent (vắng mặt)
    -   Sick (ốm)
    -   other (khác)
-   **Lọc dữ liệu điểm danh** theo:
    -   Tháng (month)
    -   Lớp học (grade)

#### 📸 Attendance management

---

![Trang Attendance management](assets/attendance-management.png)

---

### 4. ⚡ Livewire Components

-   `AttendanceFilter`: Component giúp lọc điểm danh theo tháng và lớp học
-   `AttendanceTable`: Hiển thị bảng điểm danh, cho phép tương tác qua action dropdown (Edit/Delete)

### 5. 📈 Dashboard

-   Trang tổng quan thống kê: Tỷ lệ điểm danh, tình trạng học sinh

## ⚙️ Công nghệ sử dụng

| Công nghệ        | Mô tả                                    |
| ---------------- | ---------------------------------------- |
| Laravel          | Backend framework chính                  |
| Laravel Livewire | Tạo UI tương tác mà không cần JavaScript |
| Blade            | Template engine của Laravel              |
| Tailwind CSS     | CSS framework dùng để thiết kế UI        |
| MySQL - sqlite   | Hệ quản trị cơ sở dữ liệu                |
| Laravel Breeze   | Gói authentication cho Laravel           |

---

## Sơ đồ cấu trúc và sơ đồ thuật toán

-   📸 Class Diagram

---

![classDiagram](assets/classDiagram.png)

---

-   📸 Activity Diagram

---

![Activity Diagram](assets/activityDiagram2.png)

---

## 🧪 Hướng dẫn chạy project (Local Development)

### 1. Clone project

```bash
git clone https://github.com/datphung28-debug/Attendance-tracking-app.git
cd Attendance-tracking-app
```

### 2. Cài đặt dependencies

```bash
composer install
nmp install && npm rundev
```

### 3. Cấu hình **.env** và **Database**

3.1 **Cấu hình kết nối Database trong file `.env`:**
Mở file `.env` và cập nhật các thông tin sau cho database.

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel #Tên database (có thể tạo trên xampp, mysql,...)
DB_USERNAME=root
DB_PASSWORD=
```

3.2 **Tạo APP_KEY:**

```bash
php artisan key:generate
```

3.4 **Chạy Migrations và Seeders:**
Sau khi cấu hình database, chạy các lệnh sau để tạo bảng và điền dữ liệu mẫu:

```bash
php artisan migrate:fresh --seed
```

### 4. Chạy server

```bash
php artisan serve
```

### 5. Account

| Email             | Password |
| ----------------- | -------- |
| admin@example.com | password |
| test@example.com  | password |

---

#### ❗Có thể tạo tài khoản **admin** trong file AdminSeeder.php (database\seeders\AdminSeeder.php)

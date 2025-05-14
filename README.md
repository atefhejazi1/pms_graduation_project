# ⛽ Petrol Management System - Full Stack Web Application

> 🎓 Graduation Project | Built with Laravel (PHP Framework)

## 📌 Project Description

**Petrol Management System** is a full-stack web application developed as my graduation project. The system is designed to manage petrol stations across Gaza, providing a digital platform for announcements, news, offers, and user roles. The application aims to enhance communication and monitoring between petrol station owners and the Ministry of Economy.

---

## 🎥 Demo & Overview

Watch a detailed video explaining how the platform works:  
👉 [YouTube - Platform Explanation](https://www.youtube.com/watch?v=Qw5KXXLCzVA)

---

## 🧠 Project Idea

The core goal of this system is to manage everything related to petrol stations in Gaza efficiently, digitally, and securely. The system provides:

- 📰 Latest news and updates related to petrol stations.
- 📢 Announcement system for promotions and offers.
- 🛠️ Administrative dashboard with multiple access levels.

---

## 👥 User Roles & Permissions

The system supports multiple roles with role-based access:

- **Station Owner**:  
  Can log in to manage their own station profile, publish offers, and follow up with approvals.

- **Ministry of Economy**:  
  Has a special dashboard to review and approve/reject station submissions and announcements.

- **Admin**:  
  Full control over the system, including users, roles, content, and settings.

---

## 🔑 Key Features

- 🛠️ Role-based dashboard (Admin, Owner, Ministry).
- 📢 Post offers and announcements for stations.
- 📰 News management system.
- ✅ Approval workflow by the Ministry.
- 🗂️ Clean, organized backend using Laravel.
- 💻 Responsive and user-friendly front-end.

---

## 🛠️ Tech Stack

| Layer       | Technology       |
|-------------|------------------|
| Frontend    | Blade |
| Backend     | Laravel (PHP)    |
| Database    | MySQL            |
| Auth System | Laravel Breeze |
| UI Styling  | Bootstrap / Tailwind CSS |

---

## 📂 Installation & Setup

# 1. Clone the repository
git clone [https://github.com/your-username/petrol-management-system.git](https://github.com/atefhejazi1/pms_graduation_project.git)

# 2. Navigate to the project folder
cd petrol-management-system

# 3. Install PHP dependencies
composer install

# 4. Copy .env and generate key
cp .env.example .env
php artisan key:generate

# 5. Set up your database in the .env file

# 6. Run migrations
php artisan migrate

# 7. (Optional) Seed default roles and users
php artisan db:seed

# 8. Serve the app
php artisan serve

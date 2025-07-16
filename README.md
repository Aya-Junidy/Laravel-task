# Laravel Basic Website Project

This project is a basic Laravel website built to fulfill the following requirements:

- Simple frontend with Bootstrap
- MVC architecture
- Secure authentication
- Contact form with database storage

## 📁 Pages Implemented

| Page       | Route         | Description                                               |
| ---------- | ------------- | --------------------------------------------------------- |
| Home       | `/`           | Welcome page with hero section, features, and footer      |
| About Us   | `/about-us`   | Static page with brief company information                |
| Contact Us | `/contact-us` | Contact form (Name, Email, Subject, Message) stored in DB |
| Register   | `/register`   | User registration form (Name, Email, Password + confirm)  |
| Login      | `/login`      | Login form with email and password                        |

---

## 🚀 Technologies Used

- Laravel 9.52
- PHP 8.0+
- MySQL
- Blade Templates
- Bootstrap 5 (for styling)

---

## 📦 Installation Steps

### 1. Clone or Download Project

```bash
git clone https://github.com/Aya-Junidy/Laravel-task
cd Laravel-task
```

---

## ✅ Features Implemented

- Full Laravel MVC structure
- All forms use Form Request Validation
- Passwords are hashed using Laravel's `Hash` class
- Flash messages on successful registration/contact submission
- Blade layout system with shared header/footer
- Fully responsive design using Bootstrap 5
- Data saved to:
  - `users` table (registration)
  - `contacts` table (contact form)

---

## 📁 Folder Structure Overview

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── ContactController.php
│   │   └── Auth/
│   │       ├── RegisterController.php
│   │       └── LoginController.php
│   ├── Requests/
│       ├── ContactRequest.php
│       ├── RegisterRequest.php
│       └── LoginRequest.php

resources/
├── views/
│   ├── layouts/
│   │   ├── app.blade.php
│   │   └── navbar.blade.php
│   ├── home.blade.php
│   ├── about.blade.php
│   ├── contact.blade.php
│   └── auth/
│       ├── register.blade.php
│       └── login.blade.php

routes/
└── web.php
```

---

## 📄 Deliverables

- ✅ Laravel project files (.zip or GitHub)
- ✅ All required migrations
- ✅ Contact form saves to `contacts` table
- ✅ User registration with hashed passwords
- ✅ Form validation using Form Request classes
- ✅ README file with setup instructions

## 👤 Developer

**Aya Mazen Junidy**  
Full Stack Web Development Trainee  
Email: aya2000junidy@gmail.com

---

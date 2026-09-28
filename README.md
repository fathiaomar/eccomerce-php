 # 🛒 PHP E-Commerce Platform

[![PHP](https://img.shields.io/badge/PHP-7.4%20%7C%208.x-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com)
[![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)](LICENSE)

A full-stack, session-authenticated e-commerce web application built natively with PHP and MySQL. Designed to handle complete retail workflows including product management, dynamic cart updates, customer checkout, profile administration, and secure credential handling.

---
[![Watch PHP E-Commerce Demo](https://img.youtube.com/vi/MfMWsOBko9s/maxresdefault.jpg)](https://youtu.be/MfMWsOBko9s)
## ✨ Core Application Features

### 👤 Customer Experience
- **Account Management:** User registration with email verification flow (`registration.php`, `verify.php`), session login (`login.php`), and password recovery (`forget-password.php`, `reset-password.php`).
- **Product Discovery:** Search bar integration (`search-result.php`) with multi-level category navigation (`product-category.php`, `sidebar-category.php`).
- **Cart & Billing:** Add/remove items with dynamic total calculation (`cart.php`, `cart-item-delete.php`), and shipping/billing update modules (`customer-billing-shipping-update.php`).
- **Order Tracking:** Account dashboard displaying past purchase history and order itemization (`dashboard.php`, `customer-order.php`).

### 🛡️ Security & Architecture
- **Password Encryption:** Standardized authentication layer utilizing modern native `password_hash()` and `password_verify()` functions.
- **Session Guarding:** Restricted route validation preventing unauthorized access to customer dashboard endpoints.

---

## 💻 Installation Guide by Operating System

Choose the instructions matching your laptop's operating system:

---

### 🪟 1. Windows (XAMPP / WAMP)

#### Prerequisites
- Install **XAMPP for Windows** or **WampServer**.

#### Setup Steps:
1. Open Command Prompt or PowerShell and run:
   ```bash
   cd C:\xampp\htdocs
   git clone https://github.com/fathiaomar/eccomerce-php.git eCommerceSite-PHP
   ```
2. Open **XAMPP Control Panel** and click **Start** for **Apache** and **MySQL**.

---

### 🍎 2. macOS (XAMPP for Mac / MAMP)

#### Prerequisites
- Install **XAMPP for Mac** or **MAMP**.

#### Setup Steps:
1. Open Terminal (`Cmd` + `Space`, type `Terminal`) and run:
   - For XAMPP:
     ```bash
     cd /Applications/XAMPP/htdocs
     git clone https://github.com/fathiaomar/eccomerce-php.git eCommerceSite-PHP
     ```
   - For MAMP:
     ```bash
     cd /Applications/MAMP/htdocs
     git clone https://github.com/fathiaomar/eccomerce-php.git eCommerceSite-PHP
     ```
2. Open XAMPP or MAMP and start the servers.

---

### 🐧 3. Linux / Ubuntu (LAMP / XAMPP)

#### Setup Steps:
1. Open Terminal (`Ctrl` + `Alt` + `T`) and run:
   - For XAMPP:
     ```bash
     cd /opt/lampp/htdocs
     git clone https://github.com/fathiaomar/eccomerce-php.git eCommerceSite-PHP
     ```
   - For LAMP:
     ```bash
     cd /var/www/html
     git clone https://github.com/fathiaomar/eccomerce-php.git eCommerceSite-PHP
     ```
2. Start services:
   - For XAMPP: `sudo /opt/lampp/lampp start`
   - For LAMP: `sudo systemctl start apache2 mysql`

---

## 🗄️ Database Setup (All Systems)

1. Open your web browser and go to `http://localhost/phpmyadmin/`.
2. Create a new database named **`ecommerce_db`**.
3. Select **`ecommerce_db`**, click the **SQL** tab at the top, paste this command, and click **Go**:
   ```sql
   SET GLOBAL innodb_strict_mode = 0;
   ```
4. Click the **Import** tab at the top.
5. Click **Choose File**, select the `.sql` database file included inside your cloned project folder, and click **Go** at the bottom.

---

## ⚙️ Configuration & Running

1. Open `inc/config.php` in your code editor and verify your local database settings match:
   ```php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'ecommerce_db';

   define("BASE_URL", "http://localhost/eCommerceSite-PHP/");
   ```
2. Open your web browser and visit:
   ```text
   http://localhost/eCommerceSite-PHP/
   ```

---

## 📁 Repository Structure

```text
├── index.php                             # Main storefront entry point
├── cart.php & cart-item-delete.php       # Cart state & item management
├── checkout.php                          # Checkout & order placement
├── login.php & registration.php          # Auth & account creation
├── customer-password-update.php          # Credential modification
├── customer-billing-shipping-update.php  # Shipping address manager
├── search-result.php                     # Catalog query handler
└── verify.php                            # Email token verification
```

# 🛒 PHP E-Commerce Platform

[![PHP](https://img.shields.io/badge/PHP-7.4%20%7C%208.x-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com)
[![Security](https://img.shields.io/badge/Security-Password__Hash-green?style=for-the-badge)](https://www.php.net/manual/en/function.password-hash.php)
[![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)](LICENSE)

A full-stack, session-authenticated e-commerce web application built natively with PHP and MySQL[cite: 3]. Designed to handle complete retail workflows including product management, dynamic cart updates, customer checkout, profile administration, and secure credential handling[cite: 3].

---

## 📸 Interface Preview

| Homepage & Catalog | Shopping Cart & Checkout |
| :---: | :---: |
| ![Homepage Preview](assets/preview-home.png) | ![Cart Preview](assets/preview-cart.png) |

---

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

## 🛠️ Tech Stack & Prerequisites

* **Language:** PHP (7.4 or 8.x)
* **Database:** MySQL / MariaDB
* **Server Environment:** XAMPP, WAMP, or MAMP (Apache)
* **Frontend:** HTML5, CSS3, JavaScript

---

## 🚀 Local Installation & Setup Guide

### 1. Clone or Download the Project
Clone this repository directly into your local web server root folder (e.g., `C:\xampp\htdocs\`):
```bash
cd C:\xampp\htdocs
git clone [https://github.com/fathiaomar/eccomerce-php.git](https://github.com/fathiaomar/eccomerce-php.git) eCommerceSite-PHP

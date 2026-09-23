# 🛒 PHP E-Commerce Platform

![PHP](https://img.shields.io/badge/PHP-7.4%20%7C%208.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Security](https://img.shields.io/badge/Security-password__hash-success?style=for-the-badge)
![License](https://img.shields.io/badge/License-MIT-blue.svg?style=for-the-badge)

A full-stack, session-authenticated e-commerce web application built natively with PHP and MySQL. Designed to handle complete retail workflows including product management, dynamic cart updates, customer checkout, profile administration, and secure credential handling.

---

## 📸 Interface Preview

| Homepage & Catalog | Shopping Cart & Checkout |
| :---: | :---: |
| ![Homepage Preview](https://via.placeholder.com/600x350.png?text=Add+Homepage+Screenshot+Here) | ![Cart Preview](https://via.placeholder.com/600x350.png?text=Add+Cart+Screenshot+Here) |

---

## ✨ Core Application Features

### 👤 Customer Experience
* **Account Management:** User registration with email verification flow (`registration.php`, `verify.php`), session login (`login.php`), and password recovery (`forget-password.php`, `reset-password.php`).
* **Product Discovery:** Search bar integration (`search-result.php`) with multi-level category navigation (`product-category.php`, `sidebar-category.php`).
* **Cart & Billing:** Add/remove items with dynamic total calculation (`cart.php`, `cart-item-delete.php`), and shipping/billing update modules (`customer-billing-shipping-update.php`).
* **Order Tracking:** Account dashboard displaying past purchase history and order itemization (`dashboard.php`, `customer-order.php`).

### 🛡️ Security & Architecture
* **Password Encryption:** Standardized authentication layer utilizing modern native `password_hash()` and `password_verify()` functions.
* **Session Guarding:** Restricted route validation preventing unauthorized access to customer dashboard endpoints.

---

## 🛠️ Tech Stack & Dependencies

* **Language:** PHP (Server-side rendered)
* **Database:** MySQL
* **Frontend:** HTML5, CSS3, JavaScript (DOM manipulation)
* **Server Environment:** Compatible with Apache / Nginx (XAMPP, WAMP, MAMP)

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

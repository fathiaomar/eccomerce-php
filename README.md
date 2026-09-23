# 🛒 PHP E-Commerce Platform

A lightweight, full-stack PHP e-commerce web application providing end-to-end shopping functionalities including user registration, session authentication, cart management, checkout, and customer profile administration.

---

## ✨ Key Features

- **Customer Authentication:** Secure account registration, login, and password management (migrated to `password_hash`).
- **Shopping Cart System:** Add items, modify quantities, and remove items dynamically (`cart.php`, `cart-item-delete.php`).
- **Checkout & Order Processing:** Integrated checkout flow with billing and shipping address updates (`checkout.php`, `customer-billing-shipping-update.php`).
- **Customer Dashboard:** User profile management, password updates, and order history view (`dashboard.php`, `customer-order.php`).
- **Product Navigation:** Search functionality and category filtering (`search-result.php`, `product-category.php`).

---

## 🛠️ Tech Stack

- **Language:** PHP 100%
- **Database:** MySQL
- **Frontend:** HTML, CSS, JavaScript
- **Security:** Hashed passwords (`password_hash`), email verification setup (`verify.php`), and password resets (`forget-password.php`).

---

## 🚀 Getting Started

### Prerequisites

- A local server environment such as **XAMPP**, **WAMP**, or **MAMP** with PHP and MySQL installed.

### Setup Instructions

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/fathiaomar/eccomerce-php.git](https://github.com/fathiaomar/eccomerce-php.git)   

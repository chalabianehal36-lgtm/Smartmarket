# 🛒 Smart Market

A modern full-stack e-commerce web application built with vanilla JavaScript and PHP, featuring multi-language support, dark mode, and a complete shopping flow from browsing to checkout.

![Smart Market](https://img.shields.io/badge/Smart%20Market-E--Commerce-3b82f6?style=for-the-badge)
![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-ES6+-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

---

## ✨ Features

- 🔐 **Authentication** — Secure login & registration with password hashing (`password_hash`)
- 🛍️ **Product Catalog** — Browse products by category with search & filter
- 🛒 **Shopping Cart** — Add/remove items, adjust quantities, persisted in `localStorage`
- 💳 **Checkout & Payment** — Multi-step order flow with payment method selection
- 👤 **User Profile** — Edit personal info, change password, custom avatar themes
- 🌍 **Multi-language** — French, English, Arabic (RTL support)
- 🌙 **Dark Mode** — Persistent dark/light theme toggle
- 🎡 **Lucky Wheel** — Gamified discount spinner
- 📱 **Responsive** — Mobile-friendly layout

---

## 🗂️ Project Structure

```
smart-market/
├── frontend/
│   ├── pages/             # All HTML pages
│   │   ├── index.html     # Landing page
│   │   ├── products.html  # Product listing
│   │   ├── product.html   # Single product detail
│   │   ├── cart.html      # Shopping cart
│   │   ├── payment.html   # Payment page
│   │   ├── profile.html   # User profile
│   │   ├── login.html     # Login / Sign up
│   │   └── luck.html      # Lucky wheel
│   └── assets/
│       ├── css/           # Shared stylesheets
│       └── js/            # Shared scripts
├── backend/
│   ├── api/               # PHP API endpoints
│   │   ├── login.php
│   │   ├── signup.php
│   │   ├── get_user.php
│   │   ├── update_user.php
│   │   ├── update_password.php
│   │   ├── getProducts.php
│   │   ├── getProduct.php
│   │   ├── placeOrder.php
│   │   └── select.php
│   └── config/
│       └── db.php         # Database connection
├── database/
│   └── schema.sql         # Full DB schema + seed data
├── docs/
│   └── setup.md           # Detailed setup guide
└── README.md
```

---

## 🚀 Quick Start

### Prerequisites

| Tool | Version |
|------|---------|
| PHP  | ≥ 8.0   |
| MySQL | ≥ 8.0  |
| Apache / Nginx | any |

> **Recommended:** Use [XAMPP](https://www.apachefriends.org/) or [Laragon](https://laragon.org/) for local development.

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/your-username/smart-market.git
cd smart-market

# 2. Move to your web server's root
#    XAMPP example:
cp -r . /xampp/htdocs/smart-market

# 3. Import the database
#    Open phpMyAdmin → create database "smart_market"
#    Import database/schema.sql

# 4. Configure DB credentials (if different from defaults)
#    Edit backend/config/db.php

# 5. Open in browser
#    http://localhost/smart-market/frontend/pages/index.html
```

---

## 🗄️ Database Schema

```
users          — id, nom, prenom, email, phone, address, password
products       — id, name, description, price, image, colors, category_id
categories     — id, name
orders         — id, user_id, date, status, total
order_items    — id, order_id, product_id, quantity, price
payments       — id, order_id, amount, status, payment_method, created_at
```

---

## 🔌 API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| `POST` | `/backend/api/login.php` | User login |
| `POST` | `/backend/api/signup.php` | User registration |
| `GET`  | `/backend/api/get_user.php` | Get current user (session) |
| `POST` | `/backend/api/update_user.php` | Update profile |
| `POST` | `/backend/api/update_password.php` | Change password |
| `GET`  | `/backend/api/getProducts.php` | List all products |
| `GET`  | `/backend/api/getProduct.php?id={id}` | Single product |
| `POST` | `/backend/api/placeOrder.php` | Place an order |

---

## 🛡️ Security

- Passwords hashed with `password_hash()` (bcrypt)
- Prepared statements used for all DB queries (SQL injection prevention)
- Session-based authentication on protected endpoints
- Input validation on both client and server side

---

## 🖼️ Screenshots

> Add screenshots to `docs/screenshots/` and link them here.

---

## 🤝 Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

---

## 📄 License

[MIT](LICENSE)

---

## 👨‍💻 Author

**Nehal Chalabia**  
## Contact

📧 Email: chalabianehal36@gmail.com 

🌐 GitHub: https://github.com/chalabianehal36-lgtm

🚀 Project: https://github.com/chalabianehal36-lgtm/Smartmarket

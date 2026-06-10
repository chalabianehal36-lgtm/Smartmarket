-- ============================================================
-- Smart Market - Database Schema
-- ============================================================
-- Run this file to create and seed the database.
-- Usage: mysql -u root -p < database/schema.sql
-- ============================================================

CREATE DATABASE IF NOT EXISTS smart_market
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE smart_market;

-- ------------------------------------------------------------
-- USERS
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS users (
  id       INT AUTO_INCREMENT PRIMARY KEY,
  nom      VARCHAR(100) NOT NULL,
  prenom   VARCHAR(100) NOT NULL,
  email    VARCHAR(150) NOT NULL UNIQUE,
  phone    VARCHAR(30),
  address  TEXT,
  password VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT NOW()
);

-- ------------------------------------------------------------
-- CATEGORIES
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS categories (
  id   INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL UNIQUE
);

INSERT IGNORE INTO categories (name) VALUES
  ('electronique'),
  ('mode'),
  ('maison'),
  ('local');

-- ------------------------------------------------------------
-- PRODUCTS
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS products (
  id          INT AUTO_INCREMENT PRIMARY KEY,
  name        VARCHAR(200) NOT NULL,
  description TEXT,
  price       DECIMAL(10,2) NOT NULL DEFAULT 0,
  image       VARCHAR(500),
  colors      VARCHAR(300),   -- comma-separated list
  category_id INT,
  created_at  DATETIME DEFAULT NOW(),
  FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL
);

-- ------------------------------------------------------------
-- ORDERS
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS orders (
  id         INT AUTO_INCREMENT PRIMARY KEY,
  user_id    INT NOT NULL,
  date       DATETIME DEFAULT NOW(),
  status     ENUM('pending','processing','shipped','delivered','cancelled') DEFAULT 'pending',
  total      DECIMAL(10,2) NOT NULL DEFAULT 0,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- ------------------------------------------------------------
-- ORDER ITEMS
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS order_items (
  id         INT AUTO_INCREMENT PRIMARY KEY,
  order_id   INT NOT NULL,
  product_id INT,
  quantity   INT NOT NULL DEFAULT 1,
  price      DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (order_id)   REFERENCES orders(id)   ON DELETE CASCADE,
  FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE SET NULL
);

-- ------------------------------------------------------------
-- PAYMENTS
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS payments (
  id             INT AUTO_INCREMENT PRIMARY KEY,
  order_id       INT NOT NULL,
  amount         DECIMAL(10,2) NOT NULL,
  status         ENUM('pending','paid','failed','refunded') DEFAULT 'pending',
  payment_method VARCHAR(100),
  created_at     DATETIME DEFAULT NOW(),
  FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE
);

-- ============================================================
-- SEED — Sample products
-- ============================================================
INSERT IGNORE INTO products (name, description, price, image, colors, category_id) VALUES
-- Electronics
('Casque Audio',      '', 6700,  'https://i.pinimg.com/originals/4e/a5/c8/4ea5c8c480625906a692bafa65ba7aad.jpg', 'black,red,white',  1),
('Smartphone',        '', 75000, 'https://i.pinimg.com/1200x/26/be/56/26be56634ad9773c9d8f6315cac2cba7.jpg', 'black,white',       1),
('Smart Watch',       '', 8500,  'https://i.pinimg.com/1200x/58/01/02/580102109d76a8aa631cc584069916c4.jpg', 'black,white,beige', 1),
('Tablette',          '', 20000, 'https://i.pinimg.com/1200x/6c/d1/68/6cd1685634855a383af76e5ce6c5c810.jpg', 'black,white',       1),
('Écouteurs sans fil','', 4500,  'https://i.pinimg.com/1200x/11/5c/83/115c83229e8787d01aa5b01dc4d5de5e.jpg', 'white,black',       1),
('Clé USB',           '', 1500,  'https://i.pinimg.com/1200x/19/51/05/195105875f07c215e67031f89a7ec0a9.jpg', 'black,blue,red',    1);

# Setup Guide

## Local Development (XAMPP)

1. **Install XAMPP** from https://www.apachefriends.org/
2. Start **Apache** and **MySQL** from the XAMPP control panel
3. Clone the project into `C:/xampp/htdocs/`:
   ```bash
   git clone https://github.com/your-username/smart-market.git
   ```
4. Open **phpMyAdmin** at `http://localhost/phpmyadmin`
5. Create a new database named `smart_market`
6. Click **Import** → select `database/schema.sql` → click Go
7. Open the app: `http://localhost/smart-market/frontend/pages/index.html`

## Database Configuration

Edit `backend/config/db.php` if your credentials differ:

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');        // ← change if you set a MySQL password
define('DB_NAME', 'smart_market');
```

## API Base Path

The frontend calls the backend using relative paths like `../../backend/api/login.php`.  
If you deploy to a subdirectory or a different server, update the fetch URLs in the HTML pages accordingly.

## Production Deployment

- Set a strong MySQL password and update `db.php`
- Enable HTTPS
- Set `session.cookie_secure = 1` and `session.cookie_httponly = 1` in `php.ini`
- Remove `insert_products.php` from the server (it's a one-time seed script)

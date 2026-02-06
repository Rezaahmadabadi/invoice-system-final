<?php
// ==================== FILE: config.php ====================
// ذخیره در: C:/xampp/htdocs/invoice-system-final/config.php

/**
 * تنظیمات پایگاه داده MySQL
 * WARNING: این اطلاعات حساس هستند. بعداً به فایل .env منتقل می‌شوند
 */
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', ''); // اگر رمز دارید اینجا بگذارید
define('DB_NAME', 'invoice_system_final');
define('DB_CHARSET', 'utf8mb4');

/**
 * تنظیمات امنیتی
 */
define('SITE_URL', 'http://localhost/invoice-system-final/');
define('SESSION_TIMEOUT', 3600); // 1 ساعت
define('PASSWORD_COST', 12); // هزینه هش کردن رمزها

/**
 * تنظیمات آپلود فایل
 */
define('MAX_FILE_SIZE', 10 * 1024 * 1024); // 10 مگابایت
define('ALLOWED_TYPES', ['image/jpeg', 'image/png', 'application/pdf']);
define('UPLOAD_DIR', __DIR__ . '/uploads/');

/**
 * تابع اتصال به دیتابیس
 */
function getDatabaseConnection() {
    static $connection = null;
    
    if ($connection === null) {
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        if (!$connection) {
            die("❌ خطا در اتصال به پایگاه داده: " . mysqli_connect_error());
        }
        
        mysqli_set_charset($connection, DB_CHARSET);
    }
    
    return $connection;
}

/**
 * تابع بستن اتصال
 */
function closeDatabaseConnection() {
    $connection = getDatabaseConnection();
    if ($connection) {
        mysqli_close($connection);
    }
}

// ثبت تابع بستن اتصال در زمان خروج
register_shutdown_function('closeDatabaseConnection');

// ==================== END OF FILE ====================
?>
<?php
// ==================== FILE: login.php ====================
// ذخیره در: C:/xampp/htdocs/invoice-system-final/login.php
session_start();
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ورود به سیستم - سیستم فاکتور</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .login-container {
            max-width: 400px;
            margin: 60px auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-header h2 {
            color: #2c3e50;
            margin-bottom: 10px;
        }
        .login-form input {
            width: 100%;
            padding: 14px;
            margin: 12px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }
        .login-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(to right, #3498db, #2980b9);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
        }
        .login-options {
            text-align: center;
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="main-header">
            <h1>🔐 ورود به سیستم مدیریت فاکتور</h1>
            <p class="subtitle">دسترسی به پنل کاربری</p>
        </header>

        <div class="login-container">
            <div class="login-header">
                <h2>ورود کاربران</h2>
                <p>لطفاً اطلاعات حساب خود را وارد کنید</p>
            </div>

            <form method="POST" action="" class="login-form">
                <input type="text" name="username" placeholder="نام کاربری" required>
                <input type="password" name="password" placeholder="رمز عبور" required>
                
                <div style="margin: 15px 0;">
                    <label>
                        <input type="checkbox" name="remember"> مرا به خاطر بسپار
                    </label>
                </div>

                <button type="submit" class="login-btn">ورود به سیستم</button>
            </form>

            <div class="login-options">
                <p><a href="register.php">📝 حساب کاربری ندارید؟ ثبت‌نام کنید</a></p>
                <p><a href="#">🔓 رمز عبور خود را فراموش کرده‌اید؟</a></p>
                <p><a href="index.php">← بازگشت به صفحه اصلی</a></p>
            </div>
        </div>
    </div>
</body>
</html>
<?php
// ==================== END OF FILE ====================
?>
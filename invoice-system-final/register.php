<?php
// ==================== FILE: register.php ====================
// ذخیره در: C:/xampp/htdocs/invoice-system-final/register.php
session_start();
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ثبت‌نام کاربر جدید - سیستم فاکتور</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .register-container {
            max-width: 500px;
            margin: 40px auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 25px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #2c3e50;
        }
        .form-group .required::after {
            content: " *";
            color: #e74c3c;
        }
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        .form-control:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        .form-select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            background: white;
            cursor: pointer;
        }
        .btn-register {
            width: 100%;
            padding: 15px;
            background: linear-gradient(to right, #2ecc71, #27ae60);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .btn-register:hover {
            transform: translateY(-3px);
        }
        .login-link {
            text-align: center;
            margin-top: 25px;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="main-header">
            <h1>📝 ثبت‌نام کاربر جدید</h1>
            <p class="subtitle">ورود به سیستم مدیریت فاکتور شرکت</p>
        </header>

        <div class="register-container">
            <form method="POST" action="">
                <div class="form-group">
                    <label class="required">نام کامل:</label>
                    <input type="text" name="full_name" class="form-control" 
                           placeholder="نام و نام خانوادگی" required>
                </div>

                <div class="form-group">
                    <label class="required">نام کاربری:</label>
                    <input type="text" name="username" class="form-control" 
                           placeholder="برای ورود به سیستم" required>
                    <small style="color: #7f8c8d; display: block; margin-top: 5px;">
                        فقط حروف انگلیسی و اعداد
                    </small>
                </div>

                <div class="form-group">
                    <label class="required">ایمیل:</label>
                    <input type="email" name="email" class="form-control" 
                           placeholder="example@company.com" required>
                </div>

                <div class="form-group">
                    <label class="required">رمز عبور:</label>
                    <input type="password" name="password" class="form-control" 
                           placeholder="حداقل ۸ کاراکتر" required minlength="8">
                </div>

                <div class="form-group">
                    <label class="required">تکرار رمز عبور:</label>
                    <input type="password" name="password_confirm" class="form-control" 
                           placeholder="تکرار رمز عبور" required>
                </div>

                <!-- 🔥 فیلد جدید: بخش/واحد سازمانی -->
                <div class="form-group">
                    <label class="required">بخش/واحد سازمانی:</label>
                    <select name="department" class="form-select" required>
                        <option value="">-- لطفاً بخش خود را انتخاب کنید --</option>
                        <option value="finance">💰 بخش مالی و حسابداری</option>
                        <option value="technical">🔧 بخش فنی و مهندسی</option>
                        <option value="commercial">📊 بخش بازرگانی و فروش</option>
                        <option value="procurement">🛒 بخش تأمین و خرید</option>
                        <option value="project">🏗️ بخش مدیریت پروژه</option>
                        <option value="support">🛠️ بخش پشتیبانی</option>
                        <option value="executive">👔 مدیریت ارشد</option>
                    </select>
                    <small style="color: #3498db; display: block; margin-top: 5px;">
                        🔍 توجه: اسناد فقط برای هم‌بخشی‌های شما ارسال می‌شوند
                    </small>
                </div>

                <div class="form-group">
                    <label>سمت سازمانی:</label>
                    <input type="text" name="position" class="form-control" 
                           placeholder="مثال: کارشناس فنی، مدیر پروژه">
                </div>

                <div class="form-group">
                    <label>شماره تماس:</label>
                    <input type="tel" name="phone" class="form-control" 
                           placeholder="09xxxxxxxxx">
                </div>

                <button type="submit" class="btn-register">
                    ✅ ثبت‌نام در سیستم
                </button>
            </form>

            <div class="login-link">
                <p>قبلاً حساب کاربری دارید؟ <a href="login.php">ورود به سیستم</a></p>
                <p><a href="index.php">← بازگشت به صفحه اصلی</a></p>
            </div>
        </div>
    </div>
</body>
</html>
<?php
// ==================== END OF FILE ====================
?>
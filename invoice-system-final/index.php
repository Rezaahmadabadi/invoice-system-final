<?php
// ==================== FILE: index.php ====================
session_start();
// ذخیره در: C:/xampp/htdocs/invoice-system-final/index.php
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سیستم مدیریت فاکتور - شرکت پیمانکاری</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header class="main-header">
            <h1>🏗️ سیستم مدیریت فاکتور و بارنامه</h1>
            <p class="subtitle">شرکت پیمانکاری بزرگ | نسخه حرفه‌ای</p>
        </header>

        <nav class="main-nav">
            <a href="index.php" class="nav-active">🏠 صفحه اصلی</a>
            <a href="login.php">🔐 ورود به سیستم</a>
            <a href="register.php">📝 ثبت‌نام کاربر جدید</a>
            <a href="#">📄 مدیریت فاکتورها</a>
            <a href="#">🚚 بارنامه‌ها</a>
            <a href="#">📊 گزارش‌گیری</a>
        </nav>

        <main class="main-content">
            <section class="hero">
                <h2>🚀 به سیستم جامع مدیریت اسناد خوش آمدید</h2>
                <p>سیستم ویژه شرکت‌های پیمانکاری با قابلیت‌های منحصر به فرد</p>
            </section>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">📋</div>
                    <h3>۴ نوع سند هوشمند</h3>
                    <ul>
                        <li>• فاکتور (با قرارداد)</li>
                        <li>• فاکتور (بدون قرارداد)</li>
                        <li>• بارنامه حمل و نقل</li>
                        <li>• سامانه مودیان مالیاتی</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">👥</div>
                    <h3>ارجاع بر اساس بخش</h3>
                    <p>سیستم ارجاع هوشمند بر اساس بخش/واحد سازمانی</p>
                    <ul>
                        <li>• هر سند فقط برای بخش مربوطه</li>
                        <li>• مدیریت دسترسی سطح‌بندی شده</li>
                        <li>• کارتابل اختصاصی هر کاربر</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🛡️</div>
                    <h3>امنیت بالا</h3>
                    <ul>
                        <li>• رمزنگاری پیشرفته</li>
                        <li>• کنترل دسترسی دقیق</li>
                        <li>• لاگ کامل فعالیت‌ها</li>
                        <li>• پشتیبان‌گیری خودکار</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📈</div>
                    <h3>گزارش‌گیری پیشرفته</h3>
                    <ul>
                        <li>• گزارش‌های مالی پروژه‌ها</li>
                        <li>• تحلیل عملکرد بخش‌ها</li>
                        <li>• نمودارهای تعاملی</li>
                        <li>• خروجی Excel و PDF</li>
                    </ul>
                </div>
            </div>

            <section class="setup-guide">
                <h3>📋 راهنمای راه‌اندازی سریع</h3>
                <div class="steps">
                    <div class="step completed">
                        <span class="step-number">۱</span>
                        <div>
                            <strong>ایجاد ساختار پروژه</strong>
                            <p>✅ انجام شد - فایل‌های اصلی ایجاد شده‌اند</p>
                        </div>
                    </div>
                    <div class="step current">
                        <span class="step-number">۲</span>
                        <div>
                            <strong>تنظیم پایگاه داده</strong>
                            <p>⬇️ مرحله بعد: ایجاد دیتابیس MySQL</p>
                        </div>
                    </div>
                    <div class="step">
                        <span class="step-number">۳</span>
                        <div>
                            <strong>پیاده‌سازی ثبت‌نام</strong>
                            <p>سیستم کاربران با فیلد بخش/واحد</p>
                        </div>
                    </div>
                    <div class="step">
                        <span class="step-number">۴</span>
                        <div>
                            <strong>فرم‌های هوشمند</strong>
                            <p>۴ نوع سند با فیلدهای متفاوت</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="cta-buttons">
                <a href="register.php" class="btn btn-primary">
                    📝 شروع کنید - ثبت‌نام اولین کاربر
                </a>
                <a href="#database-setup" class="btn btn-secondary">
                    🗄️ راهنمای تنظیم دیتابیس
                </a>
            </div>
        </main>

        <footer class="main-footer">
            <p>© ۱۴۰۳ - سیستم مدیریت فاکتور | نسخه ۲.۰</p>
            <p>توسعه داده شده با PHP، MySQL و معماری MVC</p>
            <p>آدرس سیستم: <code>http://localhost/invoice-system-final/</code></p>
        </footer>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
<?php
// ==================== END OF FILE ====================
?>
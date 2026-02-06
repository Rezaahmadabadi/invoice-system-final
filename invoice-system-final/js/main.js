// ==================== FILE: js/main.js ====================
// ذخیره در: C:/xampp/htdocs/invoice-system-final/js/main.js

/**
 * اسکریپت اصلی سیستم مدیریت فاکتور
 */

document.addEventListener('DOMContentLoaded', function() {
    // ۱. پیغام خوش‌آمدگویی
    console.log('🚀 سیستم مدیریت فاکتور بارگذاری شد');
    
    // ۲. مدیریت فرم ثبت‌نام
    const registerForm = document.querySelector('form[action=""]');
    if (registerForm && registerForm.method === 'POST') {
        registerForm.addEventListener('submit', function(e) {
            const password = this.querySelector('input[name="password"]');
            const confirm = this.querySelector('input[name="password_confirm"]');
            
            if (password && confirm && password.value !== confirm.value) {
                e.preventDefault();
                alert('⚠️ رمز عبور و تکرار آن مطابقت ندارند!');
                password.focus();
                return false;
            }
            
            if (password && password.value.length < 8) {
                e.preventDefault();
                alert('⚠️ رمز عبور باید حداقل ۸ کاراکتر باشد!');
                password.focus();
                return false;
            }
            
            // نمایش پیغام در حال پردازش
            const submitBtn = this.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.innerHTML = '⏳ در حال ثبت‌نام...';
                submitBtn.disabled = true;
            }
        });
    }
    
    // ۳. مدیریت فرم ورود
    const loginForm = document.querySelector('.login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.innerHTML = '⏳ در حال ورود...';
                submitBtn.disabled = true;
            }
        });
    }
    
    // ۴. انیمیشن کارت‌ها
    const featureCards = document.querySelectorAll('.feature-card');
    featureCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // ۵. مدیریت کشویی بخش‌ها
    const departmentSelect = document.querySelector('select[name="department"]');
    if (departmentSelect) {
        departmentSelect.addEventListener('change', function() {
            if (this.value) {
                this.style.borderColor = '#2ecc71';
                this.style.boxShadow = '0 0 0 3px rgba(46, 204, 113, 0.2)';
            }
        });
    }
    
    // ۶. نمایش تاریخ و زمان
    function updateDateTime() {
        const now = new Date();
        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        };
        
        const dateTimeStr = now.toLocaleDateString('fa-IR', options);
        const dateTimeElement = document.getElementById('current-datetime');
        
        if (dateTimeElement) {
            dateTimeElement.textContent = dateTimeStr;
        }
    }
    
    // ایجاد عنصر تاریخ و زمان در فوتر
    const footer = document.querySelector('.main-footer');
    if (footer) {
        const dateTimeDiv = document.createElement('div');
        dateTimeDiv.id = 'current-datetime';
        dateTimeDiv.style.marginTop = '10px';
        dateTimeDiv.style.fontSize = '0.9em';
        dateTimeDiv.style.color = '#95a5a6';
        footer.insertBefore(dateTimeDiv, footer.firstChild);
        
        updateDateTime();
        setInterval(updateDateTime, 1000);
    }
    
    // ۷. مدیریت خطاها
    window.addEventListener('error', function(e) {
        console.error('❌ خطای سیستمی:', e.error);
        // می‌توانید اینجا خطاها را به سرور گزارش دهید
    });
    
    // ۸. تأیید قبل از خروج از صفحه فرم
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('input', function() {
            window.onbeforeunload = function() {
                return '⚠️ تغییرات ذخیره نشده‌ای دارید. آیا مطمئنید می‌خواهید صفحه را ترک کنید؟';
            };
        });
        
        form.addEventListener('submit', function() {
            window.onbeforeunload = null;
        });
    });
    
    // ۹. راهنمای کاربران جدید
    if (!localStorage.getItem('visited_before')) {
        setTimeout(() => {
            alert('👋 به سیستم مدیریت فاکتور خوش آمدید!\n\nبرای شروع:\n۱. یک کاربر جدید ثبت‌نام کنید\n۲. وارد سیستم شوید\n۳. از منوی بالا بخش مورد نظر را انتخاب کنید');
            localStorage.setItem('visited_before', 'true');
        }, 2000);
    }
});

/**
 * تابع کمکی برای نمایش نوتیفیکیشن
 */
function showNotification(message, type = 'info') {
    const colors = {
        'success': '#2ecc71',
        'error': '#e74c3c',
        'warning': '#f39c12',
        'info': '#3498db'
    };
    
    const notification = document.createElement('div');
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        background: ${colors[type] || colors.info};
        color: white;
        padding: 15px 30px;
        border-radius: 8px;
        z-index: 10000;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        animation: slideIn 0.3s ease;
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// اضافه کردن استایل‌های انیمیشن
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-50%) translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }
    }
    
    @keyframes slideOut {
        from {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }
        to {
            opacity: 0;
            transform: translateX(-50%) translateY(-20px);
        }
    }
`;
document.head.appendChild(style);

// ==================== END OF FILE ====================
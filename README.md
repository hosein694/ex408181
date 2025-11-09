# ex408181

این پروژهٔ محلی است که در مسیر `e:\xampp\htdocs\ex408181` نگهداری می‌شود.

فعلاً چند فایل پایه اضافه شده‌اند تا آمادهٔ راه‌اندازی گیت شوید:

- `.gitignore` — فایل‌هایی که نباید در گیت قرار بگیرند.

برای تکمیل فرآیند و وصل کردن این پروژه به GitHub، دو راه وجود دارد:

1) اگر Git و GitHub CLI (`gh`) روی سیستم شما نصب و احراز هویت شده‌اند، می‌توانید از دستور زیر استفاده کنید (PowerShell):

```powershell
git init
git branch -M main
git add .
git commit -m "Initial commit"
gh repo create --public --source=. --remote=origin --push --confirm
```

2) اگر فقط Git نصب است یا می‌خواهید مخزن را از طریق وب‌سایت GitHub بسازید، پس از ساخت مخزن روی GitHub، از این دستورات استفاده کنید (در پوشهٔ پروژه):

```powershell
git init
git branch -M main
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/<username>/<repo>.git
git push -u origin main
```

اگر بخواهید من می‌توانم ادامه را اجرا کنم—فقط بگویید آیا می‌خواهید من ایجاد از طریق `gh` را امتحان کنم (در این صورت `gh` و ورود شما لازم است) یا ترجیح می‌دهید خودتان URL مخزن را بدهید تا من فقط دستور `git remote add` و `push` را اجرا کنم. در حال حاضر Git/gh روی این محیط شناسایی نشده‌اند، بنابراین نمی‌توانم init/commit/push خودکار را انجام دهم.

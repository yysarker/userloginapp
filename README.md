<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></p>

# Laravel User Authentication App 
<hr/>

## Here are some of the app's features
Complete Auth Features

- **Sign up**
- **LogIn**
- **Password Reset (Forgot Password)**
- **Email Verification**
- **Notification**
    - Forgot Password Request
    - Email Verification Request 

## How to use this app
At first Download this Git Repository. Then use this commands:

## `npm install && npm run dev` 
For install composer required node packages

### .env File Edit
Change the `Env` file name from `.env.example` to `.env`. In this file, we need to change 2 section. 

Give your `DB` Database credential. 

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

I used `Mailtrap` for Email verification. You can use your own `MAIL_HOST` credential.

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```


 ```
php artisan migrate
php artisan serve
```

## <p align="center">:sparkles:Now Enjoy this App:sparkles:</p>

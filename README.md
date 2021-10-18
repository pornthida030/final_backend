# GoWasabi! (Backend)

ส่วนของ Frontend URL: https://github.com/thefirstblair/final_frontend.git

# Project setup

## 1.Clone Project
```
https://github.com/pornthida030/final_backend.git
```

## 2.Install Package
```
composer install
```

## 3.Create .env file (Important)
```
cp .env.example .env
```

## 4. Create your own Database

## 5. Edit .env file
```
JWT_SECRET= your secret key
JWT_EXPIRE_HOUR= token key expire time

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= your database name same as 4.
DB_USERNAME= your username
DB_PASSWORD= your password
```

## 6.Generate App Key
```
php artisan key:generate
```

## 7.Seed data and Migrate Table
```
php artisan migrate:fresh --seed
```
## 7.Run project
```
php artisan serve
```

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
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= your database name
DB_USERNAME= your username
DB_PASSWORD= your password
```

## 6.Seed data and Migrate Table
```
php artisan migrate --seed
```
## 7.Run project
```
php artisan serve
```

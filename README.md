# Documentation

This project is a prototype web site that uses
- [Laravel version 12.0](https://laravel.com/docs/12.x)
- [jeroennoten/laravel-adminlte version 3.15.0](https://github.com/jeroennoten/Laravel-AdminLTE)

## Setup

To test the project you need a MySQL database server with these configurations or you can change it in the .env file :
- db connection => mysql
- db host => 127.0.0.1
- db port => 3306
- db name => "pmscada_dev"
- db password => "EmpQxPjdssa2y#c"
- db username => "root"

Here is the [Downloard link](https://dev.mysql.com/downloads/mysql/) for the MySQL server.

Then you need to migrate the php schemas into your database with this command :
```powershell
php artisan migrate
```
After the migration, you need to seed the database with some random data, you can do so by running these commands :
```powershell
php artisan db:seed
php artisan db:seed --class=OrderSeeder
php artisan db:seed --class=StatSeeder
php artisan db:seed --class=RecapSeeder
```
The last step to finish the setup :
```powershell
npm install
npm run build
composer run dev
```

User credentials for the login page :
- email => "test@example.com"
- password => "password"
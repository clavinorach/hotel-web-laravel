<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Hotel Management System Laravel Website
The Hotel Management System Laravel Website is a comprehensive web-based solution designed for the efficient management of hotel operations and guest services. Developed as a final project for a **Tugas Besar 2** Web Programming class, this system leverages the robust and modern PHP framework, Laravel, to provide a seamless and user-friendly interface for hotel administrators and staff.

<img width="720" alt="image" src="https://github.com/clavinorach/hotel-web-laravel/assets/143194377/89047448-4b09-4221-9d92-4611dc428c3b">
<img width="720" alt="image" src="https://github.com/clavinorach/hotel-web-laravel/assets/143194377/e0976da1-bc31-4396-b61f-31571352ebe3">




## Step 1: Environment Configuration

1. Prerequisites Installation
Before you begin, make sure the following are installed on the new device:

PHP: Laravel 11 requires PHP 8.0 or higher.
Composer: A dependency manager for PHP.
A web server: Like Apache or Nginx.
Database server: MySQL.
Javascript: Node.js and NPM.

2. Clone the Repository

```bash
https://github.com/clavinorach/hotel-web-laravel.git

```

3. Install Dependencies

```bash
composer install

```
4. Create .env File
Navigate to the root directory of the project and copy the .env.example file to a new file named .env.

```bash
cp .env.example .env
```

5. Edit .env File:
Open the .env file in a text editor of your choice. You will need to set up database connections and any other environment-specific configurations.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hotel
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

Replace your_username and your_password with your MySQL credentials. Ensure the database name is set to hotel, as we will create this database in the next step.

## Step 2: Database Setup

Create a new MySQL database for the project. You can do this using phpMyAdmin or the MySQL command line.

**Using phpMyAdmin:**
**Login to phpMyAdmin:** Setup your XAMPP and open your web browser and go to your phpMyAdmin login page (usually http://localhost/phpmyadmin).

**Create New Database:** Click on the "Databases" tab and enter hotel in the "Create database" field. And make database named "Hotel".

## Step 3: Run Migrations

```bash
php artisan migrate
```

## Step 4 : Serve The Application

```bash
php artisan serve
```

The application should now be running on http://127.0.0.1:8000 Open this URL in your web browser to start using the application.


## Authors

- [@clavinorach](https://www.github.com/clavinorach)









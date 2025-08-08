Job Portal Website
A simple online job portal to connect job seekers with employers.
Features

Job Seekers: Search and apply for jobs, create profiles
Employers: Post jobs, manage applications
Admin Panel: Manage users, jobs, and applications via phpMyAdmin

Technology Stack

Frontend: HTML, CSS, JavaScript
Backend: Laravel (PHP)
Database: MySQL (localhost)
Admin: phpMyAdmin

Installation

Clone the repository:
bashgit clone https://github.com/sajeena000/Job-Portal-Website.git
cd Job-Portal-Website

Install Laravel dependencies:
bashcomposer install

Copy environment file:
bashcp .env.example .env

Generate application key:
bashphp artisan key:generate

Configure database in .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=job_portal
DB_USERNAME=root
DB_PASSWORD=

Run migrations:
bashphp artisan migrate

Start the server:
bashphp artisan serve

Open browser: http://localhost:8000

Database Management

Access phpMyAdmin: http://localhost/phpmyadmin
Database name: job_portal
Manage users, jobs, and applications through phpMyAdmin interface

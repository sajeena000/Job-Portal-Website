# Job Portal Website

A simple online job portal to connect job seekers with employers.

## Features

- **Job Seekers**: Search and apply for jobs, create profiles
- **Employers**: Post jobs, manage applications
- **Admin Panel**: Manage users, jobs, and applications via phpMyAdmin

## Technology Stack

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: Laravel (PHP)
- **Database**: MySQL (localhost)
- **Admin**: phpMyAdmin

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/sajeena000/Job-Portal-Website.git
   cd Job-Portal-Website
   ```

2. Install Laravel dependencies:
   ```bash
   composer install
   ```

3. Copy environment file:
   ```bash
   cp .env.example .env
   ```

4. Generate application key:
   ```bash
   php artisan key:generate
   ```

5. Configure database in `.env`:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=job_portal
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. Run migrations:
   ```bash
   php artisan migrate
   ```

7. Start the server:
   ```bash
   php artisan serve
   ```

8. Open browser: `http://localhost:8000`

## Database Management

- Access phpMyAdmin: `http://localhost/phpmyadmin`
- Database name: `job_portal`
- Manage users, jobs, and applications through phpMyAdmin interface

# Task Manager System

This is a simple Task Manager application built with Laravel (backend) and Vue.js (frontend). The system allows users to create, update, delete, and filter tasks based on their status.

## Features

- **Task Management**: Create, update, and delete tasks.
- **Task Filtering**: Filter tasks by status (`All`, `Pending`, `Completed`).
- **User Authentication**: Laravel Breeze is used for authentication and user management.

## Technology Stack

- **Backend**: Laravel 10
- **Frontend**: Vue.js 3
- **Database**: SQLite
- **Authentication**: Laravel Breeze
- **HTTP Requests**: Inertia.js for seamless server-client communication

## Installation

### Step-by-Step Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/nimdz/Task_Manager.git  
   cd Task_Manager

2. Install backend dependencies:
   ```bash
   composer install

3. Install frontend dependencies:  
   ```bash
   npm install

4. Setup environment file:  
   ```bash
   cp .env.example .env

5.By default, this project is configured to use **MySQL** as the database. 

Ensure you update the `.env` file with your MySQL credentials:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=TaskManager
DB_USERNAME=root
DB_PASSWORD=

6. You may create the SQLite database file if it does not exist: 
    ```bash 
    touch database/database.sqlite

7. Generate application key:  
   ```bash
   php artisan key:generate

8. Run migrations:  
   ```bash
   php artisan migrate

9. Compile frontend assets: 
   ```bash
   npm run dev

10. **Serve the Application:**  
   ```bash
   php artisan serve



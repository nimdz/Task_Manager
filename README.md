# Task Manager System  

This is a simple **Task Manager** application built with **Laravel (backend)** and **Vue.js (frontend)**. The system allows users to create, update, delete, and filter tasks based on their status.

---

## Features  

- **Task Management**: Create, update, and delete tasks.  
- **Task Filtering**: Filter tasks by status (`All`, `Pending`, `Completed`).  
- **User Authentication**: Uses Laravel Breeze for authentication and user management.  

---

## Technology Stack  

- **Backend**: Laravel 10  
- **Frontend**: Vue.js 3  
- **Database**: MySQL / SQLite (configurable)  
- **Authentication**: Laravel Breeze  
- **HTTP Requests**: Inertia.js for seamless server-client communication  

---

## Installation  

### Step-by-Step Setup  

1. **Clone the repository**:  
   ```bash
   git clone https://github.com/nimdz/Task_Manager.git  
   cd Task_Manager
   ```

2. **Install backend dependencies**:  
   ```bash
   composer install
   ```

3. **Install frontend dependencies**:  
   ```bash
   npm install
   ```

4. **Setup environment file**:  
   ```bash
   cp .env.example .env
   ```

5. **Configure the database**:  
   - By default, the project is configured to use **MySQL**. Update the `.env` file with your MySQL credentials:
     ```dotenv
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=TaskManager
     DB_USERNAME=root
     DB_PASSWORD=
     ```

   - Alternatively, to use **SQLite**, modify the `.env` like this:
     ```dotenv
     DB_CONNECTION=sqlite
     DB_DATABASE=/full/path/to/database/database.sqlite
     ```

6. **Create the SQLite database file (if using SQLite)**:  
   ```bash
   touch database/database.sqlite
   ```

7. **Generate the application key**:  
   ```bash
   php artisan key:generate
   ```

8. **Run the migrations**:  
   ```bash
   php artisan migrate
   ```

9. **Compile the frontend assets**:  
   ```bash
   npm run dev
   ```

10. **Serve the application**:  
   ```bash
   php artisan serve
   ```

---

## Troubleshooting

- If the database configuration changes don't apply, clear the config cache:
   ```bash
   php artisan config:clear
   php artisan cache:clear
   php artisan config:cache
   ```

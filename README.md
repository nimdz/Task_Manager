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

5. Configure your `.env` file with database settings, for SQLite, add:  
   ```bash
   DB_CONNECTION=sqlite  
   DB_DATABASE=/full/path/to/database/database.sqlite

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

10. Serve the application:  
   ```bash
   php artisan serve

11. Visit http://localhost:8000 to access the Task Manager.


## Usage

- **Task Creation**: Navigate to the "Create New Task" page to add a new task. Fill in the title, description (optional), and submit.
- **Task Editing**: You can edit any task by clicking the "Edit" button next to the task in the dashboard.
- **Task Deletion**: Tasks can be deleted by clicking the "Delete" button. A confirmation dialog will appear before deletion.
- **Task Filtering**: Use the dropdown to filter tasks based on their status (`All`, `Pending`, `Completed`).

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
   git clone https://github.com/nimdz/Task_Manager.git  
   cd Task_Manager

2. Install backend dependencies:  
   composer install

3. Install frontend dependencies:  
   npm install

4. Setup environment file:  
   cp .env.example .env

5. Configure your `.env` file with database settings, for SQLite, add:  
   DB_CONNECTION=sqlite  
   DB_DATABASE=/full/path/to/database/database.sqlite

   You may create the SQLite database file if it does not exist:  
   touch database/database.sqlite

6. Generate application key:  
   php artisan key:generate

7. Run migrations:  
   php artisan migrate

8. Compile frontend assets:  
   npm run dev

9. Serve the application:  
   php artisan serve

   Visit http://localhost:8000 to access the Task Manager.

## Usage

- **Task Creation**: Navigate to the "Create New Task" page to add a new task. Fill in the title, description (optional), and submit.
- **Task Editing**: You can edit any task by clicking the "Edit" button next to the task in the dashboard.
- **Task Deletion**: Tasks can be deleted by clicking the "Delete" button. A confirmation dialog will appear before deletion.
- **Task Filtering**: Use the dropdown to filter tasks based on their status (`All`, `Pending`, `Completed`).

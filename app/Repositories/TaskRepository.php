<?php

namespace App\Repositories;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskRepository
{
    public function getTasksForUser()
    {
        // Get all tasks for the authenticated user
        return Task::where('user_id', Auth::id())->get();
    }
    public function getTasksForUserPaginated($perPage = 10)
    {
        // Fetch tasks for the authenticated user with pagination
        return Task::where('user_id', Auth::id())->paginate($perPage);
    }

    // Create a new task for the authenticated user
    public function createTask($data)
    {
        return Task::create([
            'user_id' => Auth::id(),
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'status' => $data['status'] ?? 'pending', // Default status is 'pending'
        ]);
    }

    // Update an existing task
    public function updateTask(Task $task, $data)
    {
        return $task->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'status' => $data['status'],
        ]);
    }

    // Delete a task
    public function deleteTask(Task $task)
    {
        return $task->delete();
    }
}

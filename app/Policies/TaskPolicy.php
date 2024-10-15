<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any tasks.
     */
    public function viewAny(User $user)
    {
        return true; // Allow all users to view tasks
    }

    /**
     * Determine whether the user can view the task.
     */
    public function view(User $user, Task $task)
    {
        return $user->id === $task->user_id; // Allow user to view their tasks
    }

    /**
     * Determine whether the user can create tasks.
     */
    public function create(User $user)
    {
        return true; // Allow all authenticated users to create tasks
    }

    /**
     * Determine whether the user can update the task.
     */
    public function update(User $user, Task $task)
    {
        return $user->id === $task->user_id; // Allow user to update their tasks
    }

    /**
     * Determine whether the user can delete the task.
     */
    public function delete(User $user, Task $task)
    {
        return $user->id === $task->user_id; // Allow user to delete their tasks
    }
}
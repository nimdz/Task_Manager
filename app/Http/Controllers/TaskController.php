<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TaskController extends Controller
{
    use AuthorizesRequests; 

    public function index()
    {
        // Retrieve tasks for the authenticated user
        $tasks = Task::where('user_id', Auth::id())->get();

        return Inertia::render('Tasks/Index', [
            'tasks' => $tasks,
        ]);
    }

    public function create()
    {
        return Inertia::render('Tasks/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pending,completed',
        ]);

        Task::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'pending', // Default to pending
        ]);

        return redirect()->route('dashboard')->with('success', 'Task created successfully!');
    }

    public function edit(Task $task)
    {
        return Inertia::render('Tasks/Edit', [
            'task' => $task,
        ]);
    }

    public function update(Request $request, Task $task)
    {
        $this->authorize('update', $task); // Ensure the user can update the task

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pending,completed',
        ]);

        $task->update($request->only(['title', 'description', 'status']));

        return redirect()->route('dashboard')->with('success', 'Task updated successfully!');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('dashboard')->with('success', 'Task deleted successfully');
    }
    
}
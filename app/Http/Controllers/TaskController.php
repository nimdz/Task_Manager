<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Repositories\TaskRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class TaskController extends Controller
{

    use AuthorizesRequests;

    protected $taskRepository;

    // Inject the TaskRepository in the constructor
    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function index()
    {
        // Use repository to fetch paginated tasks for the authenticated user (10 tasks per page)
        $tasks = $this->taskRepository->getTasksForUserPaginated(10);

        return Inertia::render('Tasks/Index', [
            'tasks' => $tasks, // This will now be paginated
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

        // Use repository to create the task
        $this->taskRepository->createTask($request->only(['title', 'description', 'status']));

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

        // Use repository to update the task
        $this->taskRepository->updateTask($task, $request->only(['title', 'description', 'status']));

        return redirect()->route('dashboard')->with('success', 'Task updated successfully!');
    }

    public function destroy(Task $task)
    {
        // Use repository to delete the task
        $this->taskRepository->deleteTask($task);

        return redirect()->route('dashboard')->with('success', 'Task deleted successfully');
    }
}

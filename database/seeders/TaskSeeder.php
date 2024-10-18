<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class TaskSeeder extends Seeder
{
    public function run()
    {
        // Insert some tasks into the tasks table
        Task::create([
            'user_id' => 1, // Assuming user with ID 1 exists
            'title' => 'Sample Task 1',
            'description' => 'This is the first sample task.',
            'status' => 'pending',
        ]);

        Task::create([
            'user_id' => 1, // Assuming user with ID 1 exists
            'title' => 'Sample Task 2',
            'description' => 'This is the second sample task.',
            'status' => 'completed',
        ]);

        // You can add more sample tasks here...
    }
}

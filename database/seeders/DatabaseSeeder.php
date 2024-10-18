<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 random users using factory (commented out for now)
        // User::factory(10)->create();

        // Create a specific user
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        //  call the TaskSeeder to seed tasks for the user
        $this->call(TaskSeeder::class);
    }
}

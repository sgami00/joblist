<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Auto create admin
        User::factory()->admin()->create();

        // Regular user
        User::factory()->create([
            'name'  => 'Juan Dela Cruz',
            'email' => 'juandc@example.com',
        ]);

        foreach (Job::getJobs() as $job) {
            Job::create([
                'title'       => $job['title'],
                'salary'      => (int) str_replace(['₱', ','], '', $job['salary']),
                'description' => $job['description'],
            ]);
        }
    }
}
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
        
        foreach (Job::getJobs() as $job) {
            Job::create([
                'title'       => $job['title'],
                'salary'      => (int) str_replace(['₱', ','], '', $job['salary']),
                'description' => $job['description'],
            ]);
        }
    }
}
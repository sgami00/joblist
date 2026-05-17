<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition(): array
    {
        $job = fake()->randomElement(Job::getJobs());

        return [
            'title'       => $job['title'],
            'salary'      => (int) str_replace(['₱', ','], '', $job['salary']),
            'description' => $job['description'],
        ];
    }
}
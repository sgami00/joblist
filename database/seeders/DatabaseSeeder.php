<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Admin::create([
            'name'     => 'Admin',
            'email'    => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name'  => 'Juan Dela Cruz',
            'email' => 'juandc@example.com',
        ]);

        Job::factory(15)->create();
    }
}
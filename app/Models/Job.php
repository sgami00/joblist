<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = [
        'title',
        'salary',
        'description',
    ];

    public static function getJobs(): array
    {
        return [
            ['id' => 1,  'title' => 'Software Developer',     'salary' => '₱50,000', 'description' => 'A software developer designs, codes, tests, and maintains software applications or systems.'],
            ['id' => 2,  'title' => 'Web Developer',          'salary' => '₱45,000', 'description' => 'A Web Developer creates, maintains, and updates websites and web applications.'],
            ['id' => 3,  'title' => 'Front-End Developer',    'salary' => '₱40,000', 'description' => 'A Front End Developer builds the user-facing portions of web applications.'],
            ['id' => 4,  'title' => 'Back-End Developer',     'salary' => '₱48,000', 'description' => 'A back-end developer builds and maintains the server-side logic and APIs.'],
            ['id' => 5,  'title' => 'Full-Stack Developer',   'salary' => '₱55,000', 'description' => 'A full-stack developer handles both the front-end and back-end.'],
            ['id' => 6,  'title' => 'Data Analyst',           'salary' => '₱42,000', 'description' => 'A data analyst collects and interprets complex data sets.'],
            ['id' => 7,  'title' => 'Database Administrator', 'salary' => '₱47,000', 'description' => 'A Database Administrator manages and secures data infrastructure.'],
            ['id' => 8,  'title' => 'Network Administrator',  'salary' => '₱44,000', 'description' => 'A Network Administrator manages day-to-day computer network operations.'],
            ['id' => 9,  'title' => 'Cybersecurity Analyst',  'salary' => '₱60,000', 'description' => 'A cybersecurity analyst protects data and networks from cyberattacks.'],
            ['id' => 10, 'title' => 'Mobile App Developer',   'salary' => '₱52,000', 'description' => 'A mobile developer designs applications for smartphones and tablets.'],
            ['id' => 11, 'title' => 'UI/UX Designer',         'salary' => '₱38,000', 'description' => 'A UI/UX Designer designs graphic elements and navigation components.'],
            ['id' => 12, 'title' => 'System Analyst',         'salary' => '₱46,000', 'description' => 'A Systems Analyst bridges the gap between business needs and technology.'],
            ['id' => 13, 'title' => 'IT Support Specialist',  'salary' => '₱30,000', 'description' => 'An IT Support Specialist diagnoses and repairs technical issues.'],
            ['id' => 14, 'title' => 'Cloud Engineer',         'salary' => '₱58,000', 'description' => 'A Cloud Engineer ensures applications work smoothly on the cloud.'],
            ['id' => 15, 'title' => 'DevOps Engineer',        'salary' => '₱62,000', 'description' => 'A DevOps Engineer automates infrastructure and deployment.'],
        ];
    }
}
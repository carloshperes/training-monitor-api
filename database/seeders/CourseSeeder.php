<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses    = [
            ['name' => 'PHP 8+'],
            ['name' => 'JavaScript'],
            ['name' => 'CSS'],
            ['name' => 'Laravel'],
            ['name' => 'Vue 3'],
            ['name' => 'Nuxt 3'],
            ['name' => 'Docker'],
            ['name' => 'Linux'],
            ['name' => 'Tailwind'],
            ['name' => 'MySQL'],
            ['name' => 'Design Patterns'],
            ['name' => 'Git'],
        ];

        foreach($courses as $course){
            Course::create($course);
        }
    }
}

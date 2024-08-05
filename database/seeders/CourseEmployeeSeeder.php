<?php

namespace Database\Seeders;

use App\Models\CourseEmployee;
use Database\Factories\CourseEmployeeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CourseEmployee::factory()
            ->count(50)
            ->create();
    }
}

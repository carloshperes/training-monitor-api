<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseEmployee>
 */
class CourseEmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => Employee::inRandomOrder()->first()->id,
            'course_id' => Course::inRandomOrder()->first()->id,
            'progress' => $this->faker->numberBetween(0, 100),
            'score' => $this->faker->numberBetween(0, 10),
        ];
    }
}

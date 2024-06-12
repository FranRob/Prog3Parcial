<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assist>
 */
class AssistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $studentid = Student::inRandomOrder()->first()->id;

        return [
            'student_id' => $studentid,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

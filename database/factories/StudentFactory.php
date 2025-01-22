<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => fake()->text(50),
            'name' => fake()->text(50),
            'email' => fake()->text(50),
            'phone' => fake()->text(50),
            'address' => fake()->text(500),

        ];
    }
}

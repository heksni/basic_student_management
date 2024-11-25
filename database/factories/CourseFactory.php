<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subjects = collect([
            'mathematics',
            'physics',
            'chemistry',
            'biology',
            'history',
            'philosophy',
            'computer science',
            'economics',
            'literature',
            'psychology',
            'sociology',
            'political science',
            'engineering',
        ])->random(3);


        return [
            'name' => fake()->jobTitle(),
            'syllabus' => $subjects,
            'duration' => fake()->randomDigitNotZero()." hrs"
        ];
    }
}

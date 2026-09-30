<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->numberBetween(3000, 15000),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
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
            'user_id' => User::factory(),
            'job_title' => fake()->randomElement(['Software Engineer', 'Software Architect', 'Solution Architect','DevOps Engineer','Network Engineer','Tech Lead','Project Manager']),
            'job_location' => fake()->country(),
            'job_description' => fake()->paragraph(),
            'job_type' => fake()->randomElement(['office','hybrid','remote']),
            'employ_type' => fake()->randomElement(['full-time', 'part-time', 'contract', 'temporary', 'intern', 'volunteer', 'other']),
            'application' => fake()->word(),
            'company_name' => fake()->company(),
            'salary' => "$" . fake()->numberBetween(100000, 200000),
            'company_logo_path' => null,
            'featured' => fake()->randomElement([true,false]),
            'published' => true
        ];
    }
}

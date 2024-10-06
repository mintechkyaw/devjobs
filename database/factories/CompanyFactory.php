<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
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
            'name' => fake()->company(),
            'email' => fake()->companyEmail(),
            'type' => fake()->randomElement(['Freelance', 'IT Solution', 'Agency']),
            'location' => fake()->country(),
            'website' => fake()->url(),
            'logo_path' => fake()->imageUrl(),
            'featured_image_path' => fake()->imageUrl(),
            'verified' => fake()->randomElement([true, false]),
            'about' => fake()->paragraph(),
        ];
    }
}

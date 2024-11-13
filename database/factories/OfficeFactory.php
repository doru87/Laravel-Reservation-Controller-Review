<?php

namespace Database\Factories;

use App\Models\Office;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Office>
 */
class OfficeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Automatically create a user for each office
            'hidden' => $this->faker->boolean,
            'approval_status' => $this->faker->randomElement(['approved', 'pending', 'rejected']),
            'price_per_day' => $this->faker->numberBetween(50, 500),
            'monthly_discount' => $this->faker->numberBetween(0, 20),
        ];
    }
}

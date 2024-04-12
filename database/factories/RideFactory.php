<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'starting_point' => fake()->city(),
            'destination' => fake()->city(),
            'passenger_space' => fake()->numberBetween(1, 8),
            'price_per_passenger' => fake()->numberBetween(1000, 3000),
            'departure_time' => Carbon::now(),
            'description' => fake()->paragraph(4),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'beds' => fake()->numberBetween(1, 5),
            'baths' => fake()->numberBetween(1, 5),
            'area' => fake()->numberBetween(30, 400),
            'city' => fake()->city(),
            'code' => fake()->postcode(),
            'street' => fake()->streetName(),
            'street_num' => fake()->numberBetween(1, 200),
            'price' => fake()->numberBetween(10_000, 1_000_000),
        ];
    }
}

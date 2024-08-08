<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pets>
 */
class PetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'species' => fake()->word(),
            'breed' => fake()->word(),
            'age' => fake()->numberBetween(1, 20),
            'color' => fake()->colorName(),
            'gender' => fake()->randomElement(['male', 'female']),
            'weight' => fake()->randomFloat(2, 1, 50),
            'owner_id' => fake()->numberBetween(1, 10),
        ];
    }
}

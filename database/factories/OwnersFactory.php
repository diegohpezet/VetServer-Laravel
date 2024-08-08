<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owners>
 */
class OwnersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "email" => fake()->unique()->safeEmail(),
            "phone" => fake()->phoneNumber(),
            "address_city" => fake()->city(),
            "address_street" => fake()->streetAddress(),
            "address_number" => fake()->buildingNumber()
        ];
    }
}

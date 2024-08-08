<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Treatments>
 */
class TreatmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pet_id' => random_int(1,10),
            'treatment_name' => fake()->title(),
            'description' => fake()->text(),
            'treatment_start_date' => now()->addDays(rand(1, 30))->format('Y-m-d'),
            'status' => fake()->randomElement(['pending', 'completed', 'abandoned'])
        ];
    }
}

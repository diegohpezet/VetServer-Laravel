<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "pet_id" => random_int(1,10),
            "appointment_datetime" => now()->addDays(rand(1, 30))->addHours(rand(8, 20))->format('Y-m-d H:i:s'),
            "description" => $this->faker->sentence(5),
            "status" => $this->faker->randomElement(['pending', 'cancelled', 'completed'])
        ];
    }
}

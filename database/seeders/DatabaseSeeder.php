<?php

namespace Database\Seeders;

use App\Models\Owners;
use App\Models\Pets;
use App\Models\Appointments;
use App\Models\Treatments;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Owners::factory(10)->create();
        Pets::factory(10)->create();
        Appointments::factory(10)->create();
        Treatments::factory(10)->create();
    }
}

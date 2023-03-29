<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VacancyDirections;

class VacancyDirectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VacancyDirections::factory()
            ->count(5)
            ->create();
    }
}

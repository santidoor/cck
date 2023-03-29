<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VacancyPositions;

class VacancyPositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VacancyPositions::factory()
            ->count(5)
            ->create();
    }
}

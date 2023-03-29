<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CardinalDirections;

class CardinalDirectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CardinalDirections::factory()
            ->count(5)
            ->create();
    }
}

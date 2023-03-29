<?php

namespace Database\Seeders;

use App\Models\ActionsType;
use Illuminate\Database\Seeder;

class ActionsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ActionsType::factory()
            ->count(5)
            ->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Klasses;
use Illuminate\Database\Seeder;

class KlassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Klasses::factory()
            ->count(5)
            ->create();
    }
}

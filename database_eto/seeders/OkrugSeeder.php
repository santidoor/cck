<?php

namespace Database\Seeders;

use App\Models\Okrug;
use Illuminate\Database\Seeder;

class OkrugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Okrug::factory()
            ->count(5)
            ->create();
    }
}

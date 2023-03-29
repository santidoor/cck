<?php

namespace Database\Seeders;

use App\Models\Tenders;
use Illuminate\Database\Seeder;

class TendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenders::factory()
            ->count(5)
            ->create();
    }
}

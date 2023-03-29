<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BuildingsStatus;

class BuildingsStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BuildingsStatus::factory()
            ->count(5)
            ->create();
    }
}

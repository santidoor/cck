<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZhkObjectConstructionProgress;

class ZhkObjectConstructionProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ZhkObjectConstructionProgress::factory()
            ->count(5)
            ->create();
    }
}

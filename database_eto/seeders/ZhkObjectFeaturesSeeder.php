<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZhkObjectFeatures;

class ZhkObjectFeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ZhkObjectFeatures::factory()
            ->count(5)
            ->create();
    }
}

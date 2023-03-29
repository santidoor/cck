<?php

namespace Database\Seeders;

use App\Models\MainPageSlider;
use Illuminate\Database\Seeder;

class MainPageSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MainPageSlider::factory()
            ->count(5)
            ->create();
    }
}

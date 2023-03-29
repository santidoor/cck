<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApartmentGlazingType;

class ApartmentGlazingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApartmentGlazingType::factory()
            ->count(5)
            ->create();
    }
}

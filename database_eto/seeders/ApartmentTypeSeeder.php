<?php

namespace Database\Seeders;

use App\Models\ApartmentType;
use Illuminate\Database\Seeder;

class ApartmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApartmentType::factory()
            ->count(5)
            ->create();
    }
}

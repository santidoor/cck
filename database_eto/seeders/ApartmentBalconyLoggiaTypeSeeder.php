<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApartmentBalconyLoggiaType;

class ApartmentBalconyLoggiaTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApartmentBalconyLoggiaType::factory()
            ->count(5)
            ->create();
    }
}

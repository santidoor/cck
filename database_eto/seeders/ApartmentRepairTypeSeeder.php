<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApartmentRepairType;

class ApartmentRepairTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApartmentRepairType::factory()
            ->count(5)
            ->create();
    }
}

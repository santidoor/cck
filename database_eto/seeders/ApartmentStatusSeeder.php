<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApartmentStatus;

class ApartmentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApartmentStatus::factory()
            ->count(5)
            ->create();
    }
}

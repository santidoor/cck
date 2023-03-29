<?php

namespace Database\Seeders;

use App\Models\TypeOfParking;
use Illuminate\Database\Seeder;

class TypeOfParkingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeOfParking::factory()
            ->count(5)
            ->create();
    }
}

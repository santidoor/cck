<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApartmentCountRooms;

class ApartmentCountRoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApartmentCountRooms::factory()
            ->count(5)
            ->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BuildingMaterial;

class BuildingMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BuildingMaterial::factory()
            ->count(5)
            ->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZhkObjectSpecifications;

class ZhkObjectSpecificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ZhkObjectSpecifications::factory()
            ->count(5)
            ->create();
    }
}

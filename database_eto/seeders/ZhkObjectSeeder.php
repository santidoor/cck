<?php

namespace Database\Seeders;

use App\Models\ZhkObject;
use Illuminate\Database\Seeder;

class ZhkObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ZhkObject::factory()
            ->count(5)
            ->create();
    }
}

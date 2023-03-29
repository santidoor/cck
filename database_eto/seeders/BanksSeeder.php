<?php

namespace Database\Seeders;

use App\Models\Banks;
use Illuminate\Database\Seeder;

class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banks::factory()
            ->count(5)
            ->create();
    }
}

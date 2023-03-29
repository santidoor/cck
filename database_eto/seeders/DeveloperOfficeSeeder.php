<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DeveloperOffice;

class DeveloperOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeveloperOffice::factory()
            ->count(5)
            ->create();
    }
}

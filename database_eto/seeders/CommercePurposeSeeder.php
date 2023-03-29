<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CommercePurpose;

class CommercePurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CommercePurpose::factory()
            ->count(5)
            ->create();
    }
}

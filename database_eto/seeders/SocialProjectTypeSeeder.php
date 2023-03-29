<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SocialProjectType;

class SocialProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialProjectType::factory()
            ->count(5)
            ->create();
    }
}

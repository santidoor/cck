<?php

namespace Database\Seeders;

use App\Models\SocialProject;
use Illuminate\Database\Seeder;

class SocialProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialProject::factory()
            ->count(5)
            ->create();
    }
}

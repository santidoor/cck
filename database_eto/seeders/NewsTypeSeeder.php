<?php

namespace Database\Seeders;

use App\Models\NewsType;
use Illuminate\Database\Seeder;

class NewsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsType::factory()
            ->count(5)
            ->create();
    }
}

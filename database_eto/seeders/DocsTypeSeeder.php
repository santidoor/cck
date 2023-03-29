<?php

namespace Database\Seeders;

use App\Models\DocsType;
use Illuminate\Database\Seeder;

class DocsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DocsType::factory()
            ->count(5)
            ->create();
    }
}

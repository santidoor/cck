<?php

namespace Database\Seeders;

use App\Models\Docs;
use Illuminate\Database\Seeder;

class DocsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Docs::factory()
            ->count(5)
            ->create();
    }
}

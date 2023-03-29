<?php

namespace Database\Seeders;

use App\Models\ViewFromWindow;
use Illuminate\Database\Seeder;

class ViewFromWindowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ViewFromWindow::factory()
            ->count(5)
            ->create();
    }
}

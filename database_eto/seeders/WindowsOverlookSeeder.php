<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WindowsOverlook;

class WindowsOverlookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WindowsOverlook::factory()
            ->count(5)
            ->create();
    }
}

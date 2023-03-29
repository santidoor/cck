<?php

namespace Database\Seeders;

use App\Models\BanksProgram;
use Illuminate\Database\Seeder;

class BanksProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BanksProgram::factory()
            ->count(5)
            ->create();
    }
}

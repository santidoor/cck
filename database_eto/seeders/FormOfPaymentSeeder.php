<?php

namespace Database\Seeders;

use App\Models\FormOfPayment;
use Illuminate\Database\Seeder;

class FormOfPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FormOfPayment::factory()
            ->count(5)
            ->create();
    }
}

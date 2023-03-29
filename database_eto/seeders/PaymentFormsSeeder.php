<?php

namespace Database\Seeders;

use App\Models\PaymentForms;
use Illuminate\Database\Seeder;

class PaymentFormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentForms::factory()
            ->count(5)
            ->create();
    }
}

<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\BanksProgram;
use Illuminate\Database\Eloquent\Factories\Factory;

class BanksProgramFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BanksProgram::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}

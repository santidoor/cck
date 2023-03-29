<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ApartmentRepairType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentRepairTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ApartmentRepairType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'img' => $this->faker->text(255),
            'name' => $this->faker->text(255),
        ];
    }
}

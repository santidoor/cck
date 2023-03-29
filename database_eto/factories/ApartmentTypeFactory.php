<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ApartmentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ApartmentType::class;

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

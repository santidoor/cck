<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\TypeOfParking;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeOfParkingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TypeOfParking::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'buildings_id' => \App\Models\Buildings::factory(),
        ];
    }
}

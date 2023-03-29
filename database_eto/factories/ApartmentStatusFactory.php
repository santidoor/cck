<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ApartmentStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ApartmentStatus::class;

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

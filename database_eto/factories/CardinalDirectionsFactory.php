<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\CardinalDirections;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardinalDirectionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CardinalDirections::class;

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

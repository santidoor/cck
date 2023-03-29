<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\BuildingsStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class BuildingsStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BuildingsStatus::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => $this->faker->numberBetween(0, 127),
            'name' => $this->faker->name(),
        ];
    }
}

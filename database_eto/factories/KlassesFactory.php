<?php

namespace Database\Factories;

use App\Models\Klasses;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class KlassesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Klasses::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug,
        ];
    }
}

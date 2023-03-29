<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\BuildingMaterial;
use Illuminate\Database\Eloquent\Factories\Factory;

class BuildingMaterialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BuildingMaterial::class;

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

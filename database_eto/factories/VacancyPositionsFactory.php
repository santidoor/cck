<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\VacancyPositions;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacancyPositionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VacancyPositions::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'vacancy_directions_id' => \App\Models\VacancyDirections::factory(),
        ];
    }
}

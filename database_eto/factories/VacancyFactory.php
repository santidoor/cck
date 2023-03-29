<?php

namespace Database\Factories;

use App\Models\Vacancy;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacancy::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(10),
            'text' => $this->faker->text,
            'salary' => $this->faker->randomNumber(1),
            'vacancy_positions_id' => \App\Models\VacancyPositions::factory(),
        ];
    }
}

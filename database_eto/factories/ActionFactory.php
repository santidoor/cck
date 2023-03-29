<?php

namespace Database\Factories;

use App\Models\Action;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Action::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(10),
            'mini_text' => $this->faker->text(255),
            'text' => $this->faker->text,
            'date_end' => $this->faker->date,
            'img' => $this->faker->text(255),
            'actions_type_id' => \App\Models\ActionsType::factory(),
        ];
    }
}

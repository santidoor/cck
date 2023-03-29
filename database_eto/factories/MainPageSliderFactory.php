<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\MainPageSlider;
use Illuminate\Database\Eloquent\Factories\Factory;

class MainPageSliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MainPageSlider::class;

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
            'img' => $this->faker->text(255),
            'url' => $this->faker->text,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ViewFromWindow;
use Illuminate\Database\Eloquent\Factories\Factory;

class ViewFromWindowFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ViewFromWindow::class;

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

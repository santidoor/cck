<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PaymentForms;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFormsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PaymentForms::class;

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
            'img' => $this->faker->text(255),
            'icon' => $this->faker->text(255),
        ];
    }
}

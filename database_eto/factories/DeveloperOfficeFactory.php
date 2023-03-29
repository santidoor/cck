<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\DeveloperOffice;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeveloperOfficeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeveloperOffice::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'adress' => $this->faker->text,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'coords' => $this->faker->text(255),
            'main_office' => $this->faker->boolean,
            'city_id' => \App\Models\City::factory(),
        ];
    }
}

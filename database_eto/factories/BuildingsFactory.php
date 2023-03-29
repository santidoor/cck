<?php

namespace Database\Factories;

use App\Models\Buildings;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BuildingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Buildings::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'liter_num' => $this->faker->randomNumber(0),
            'floors' => $this->faker->randomNumber(0),
            'ceiling_height' => $this->faker->randomNumber(0),
            'passenger_elevators' => $this->faker->randomNumber(0),
            'freight_elevators' => $this->faker->randomNumber(0),
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'key_date' => $this->faker->date,
            'gallery' => $this->faker->text,
            'zhk_object_id' => \App\Models\ZhkObject::factory(),
            'buildings_status_id' => \App\Models\BuildingsStatus::factory(),
        ];
    }
}

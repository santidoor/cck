<?php

namespace Database\Factories;

use App\Models\Commerce;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommerceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commerce::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'floor' => $this->faker->randomNumber(0),
            'doorway' => $this->faker->text(255),
            'apartment_number' => $this->faker->randomNumber(0),
            'total_area' => $this->faker->randomNumber(0),
            'price' => $this->faker->randomFloat(2, 0, 9999),
            'price_m2' => $this->faker->randomNumber(1),
            'price_action' => $this->faker->randomNumber(1),
            'img_room' => $this->faker->text(255),
            'img_floor' => $this->faker->text(255),
            'buildings_id' => \App\Models\Buildings::factory(),
            'zhk_object_id' => \App\Models\ZhkObject::factory(),
            'cardinal_directions_id' => \App\Models\CardinalDirections::factory(),
            'apartment_status_id' => \App\Models\ApartmentStatus::factory(),
            'commerce_purpose_id' => \App\Models\CommercePurpose::factory(),
        ];
    }
}

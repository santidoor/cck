<?php

namespace Database\Factories;

use App\Models\Apartment;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apartment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'floors' => $this->faker->randomNumber(0),
            'doorway' => $this->faker->text(255),
            'apartment_number' => $this->faker->randomNumber(0),
            'total_area' => $this->faker->randomNumber(0),
            'kitchen_area' => $this->faker->randomNumber(0),
            'living_area' => $this->faker->randomNumber(0),
            'count_separate_su' => $this->faker->randomNumber(0),
            'count_joint_su' => $this->faker->randomNumber(0),
            'area_su' => $this->faker->randomNumber(0),
            'price' => $this->faker->randomNumber(0),
            'price_m2' => $this->faker->randomNumber(0),
            'price_action' => $this->faker->randomNumber(0),
            'img_room' => $this->faker->text(255),
            'img_floor' => $this->faker->imageUrl($width = 640, $height = 480),
            'img_furniture' => $this->faker->text(255),
            '3d_tour' => $this->faker->text(255),
            '3d_apartment' => $this->faker->text(255),
            'dressing_room' => $this->faker->boolean,
            'buildings_id' => \App\Models\Buildings::factory(),
            'apartment_count_rooms_id' => \App\Models\ApartmentCountRooms::factory(),
            'apartment_glazing_type_id' => \App\Models\ApartmentGlazingType::factory(),
            'apartment_repair_type_id' => \App\Models\ApartmentRepairType::factory(),
            'apartment_balcony_loggia_type_id' => \App\Models\ApartmentBalconyLoggiaType::factory(),
            'cardinal_directions_id' => \App\Models\CardinalDirections::factory(),
            'apartment_type_id' => \App\Models\ApartmentType::factory(),
            'windows_overlook_id' => \App\Models\WindowsOverlook::factory(),
            'apartment_status_id' => \App\Models\ApartmentStatus::factory(),
        ];
    }
}

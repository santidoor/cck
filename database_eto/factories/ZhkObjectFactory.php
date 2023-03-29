<?php

namespace Database\Factories;

use App\Models\ZhkObject;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZhkObjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ZhkObject::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug,
            'street' => $this->faker->streetAddress,
            'coords' => $this->faker->text(255),
            'gallery' => $this->faker->text,
            'intro_title' => $this->faker->text(255),
            'intro_text' => $this->faker->text,
            'meta_title' => $this->faker->text(255),
            'meta_discription' => $this->faker->text,
            'intro_video' => $this->faker->text(255),
            'aeroponarama' => $this->faker->text(255),
            'popular' => $this->faker->boolean,
            'genplan_day' => $this->faker->text(255),
            'genplan_night' => $this->faker->text(255),
            'city_id' => \App\Models\City::factory(),
            'district_id' => \App\Models\District::factory(),
            'okrug_id' => \App\Models\Okrug::factory(),
            'klasses_id' => \App\Models\Klasses::factory(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ZhkObjectFeatures;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZhkObjectFeaturesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ZhkObjectFeatures::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'text' => $this->faker->text,
            'media_content_type' => $this->faker->text(255),
            'media_content' => $this->faker->text(255),
            'zhk_object_id' => \App\Models\ZhkObject::factory(),
        ];
    }
}

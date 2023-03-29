<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ZhkObjectConstructionProgress;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZhkObjectConstructionProgressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ZhkObjectConstructionProgress::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'date' => $this->faker->date,
            'media_content_type' => $this->faker->text(255),
            'media_content' => $this->faker->text(255),
            'zhk_object_id' => \App\Models\ZhkObject::factory(),
        ];
    }
}

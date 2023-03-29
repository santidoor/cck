<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ZhkObjectSpecifications;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZhkObjectSpecificationsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ZhkObjectSpecifications::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(10),
            'sub_title' => $this->faker->text(255),
            'zhk_object_id' => \App\Models\ZhkObject::factory(),
        ];
    }
}

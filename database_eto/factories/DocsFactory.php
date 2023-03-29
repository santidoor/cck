<?php

namespace Database\Factories;

use App\Models\Docs;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Docs::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(10),
            'date' => $this->faker->date,
            'href' => $this->faker->text(255),
            'zhk_object_id' => \App\Models\ZhkObject::factory(),
            'docs_type_id' => \App\Models\DocsType::factory(),
        ];
    }
}

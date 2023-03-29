<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

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
            'date_end' => $this->faker->date,
            'img' => $this->faker->text(255),
            'news_type_id' => \App\Models\NewsType::factory(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\SocialMediaType;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialMediaTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialMediaType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'logo' => $this->faker->text(255),
            'social_media_id' => \App\Models\SocialMedia::factory(),
        ];
    }
}

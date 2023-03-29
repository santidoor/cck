<?php

namespace Database\Factories;

use App\Models\DocsType;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocsTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DocsType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [];
    }
}

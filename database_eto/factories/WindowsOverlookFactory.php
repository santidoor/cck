<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\WindowsOverlook;
use Illuminate\Database\Eloquent\Factories\Factory;

class WindowsOverlookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WindowsOverlook::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}

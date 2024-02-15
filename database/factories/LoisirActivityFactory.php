<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LoisirActivity>
 */
class LoisirActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'sub_title' => $this->faker->sentence,
            'short_description' => $this->faker->paragraph,
            'long_description' => $this->faker->paragraphs(3, true),
            'image_path' => $this->faker->imageUrl(),
        ];
    }
}

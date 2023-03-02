<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SocialMedia>
 */
class SocialMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name;
        return [
            "name" => $name,
            "icon" => fake()->randomElement,
            "status" => fake()->boolean,
            "link" => fake()->url,
            "order" => random_int(0,100)

        ];
    }
}

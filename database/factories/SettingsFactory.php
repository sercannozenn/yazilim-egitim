<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Settings>
 */
class SettingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "logo_image" => fake()->image,
            "home_slider_image" => fake()->image,
            "adverse_image" => fake()->image,
            "footer_text" => fake()->text,
            "footer_description" => fake()->text,
            "most_popular_status" => fake()->boolean,
            "recent_article_status" => fake()->boolean,
            "search_status" => fake()->boolean,
            "home_pages_slider_text_1" => fake()->text,
            "home_pages_slider_text_2" => fake()->text,
            "home_pages_slider_text_3" => fake()->text,
        ];
    }
}

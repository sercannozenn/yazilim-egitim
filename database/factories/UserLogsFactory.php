<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserLogs>
 */
class UserLogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "process_id" => random_int(1,10),
            "user_id" => random_int(1,10),
            "process_type" => fake()->randomElement(),
        ];
    }
}

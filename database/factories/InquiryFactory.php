<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InquiryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'send_user_id' => fake()->numberBetween(1, 10),
            'category' => Arr::random(['A', 'B', 'C']),
            'company' => fake()->company(),
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'content' => fake()->text(10),
            'note' => fake()->text(10),
        ];
    }
}

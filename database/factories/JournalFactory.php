<?php

namespace Database\Factories;

use Faker\Provider\DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Journal>
 */
class JournalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'subject' => fake()->title(),
            'issn' => fake()->unique()->randomNumber(8,true),
            'email' => fake()->unique()->safeEmail(),
            'created_date' => DateTime::date(),
        ];
    }
}

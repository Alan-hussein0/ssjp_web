<?php

namespace Database\Factories;

use App\Models\Journal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Research>
 */
class ResearchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'domain' => fake()->title(),
            'title' => fake()->title(),
            'abstract' => fake()->paragraph(),
            'word_file' => fake()->file(storage_path('tmp/word_file'),storage_path('word_file')),
            'keywords' => fake()->words(5),
            'journal_id' => Journal::factory(),
        ];
    }
}

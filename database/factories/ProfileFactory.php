<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Provider\DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $max = '2000-01-01 12-00-00';
        return [
            'photo' => fake()->imageUrl(),
            'gender' => fake()->boolean(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'date_of_birth' => DateTime::date('Y-m-d',$max), 
            'user_id' => User::factory(),
        ];
    }
}

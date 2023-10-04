<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\App_user>
 */
class App_userFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'app_language' => 'en',
            'dob' => $this->faker->date($format = 'Y-m-d', $max = '1990-01-26'),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'job_preferance_category' => '1,3',
            'created_at' => now(),
        ];
    }
}

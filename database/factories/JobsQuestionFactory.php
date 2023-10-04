<?php

namespace Database\Factories;

use App\Models\JobsQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobsQuestion>
 */
class JobsQuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = JobsQuestion::class;

    public function definition()
    {
        return [
            'question' => $this->faker->sentence,
            // Add other attributes and their values here
        ];
    }
}

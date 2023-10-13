<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
             
                'legal_name' => $this->faker->company,
                'popular_name' => $this->faker->companySuffix,
                'url' => $this->faker->url,
                'logo' => 'images/company/' . $this->faker->randomElement(['zomato.png', 'swiggy.png']), // Adjust the path as needed
                'about' => $this->faker->paragraph,
                'address' => $this->faker->address,
                'contact_main' => $this->faker->phoneNumber,
                'company_type' => $this->faker->randomElement(['Kamaao', 'Other']),
                // Add other attributes and their values here
        ];
    }
}

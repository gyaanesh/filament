<?php

namespace Database\Factories;

use App\Models\ProjectLeads;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectLeadsFactory extends Factory
{

    protected $model = ProjectLeads::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $addedBy = $this->faker->randomElement(['app_users', 'team_members']);
        $status = $this->faker->randomElement([
            ['id' => 1, 'status' => 'Added',],
            ['id' => 2, 'status' => 'Applied',],
            ['id' => 3, 'status' => 'Selected',],
            ['id' => 4, 'status' => 'Rewarded',],
           
        ]);

        return [
            'lead_for_user' => 1, 
            'project_id' => $this->faker->numberBetween(1, 50),  
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'pincode' => $this->faker->postcode,
            'notes' => $this->faker->text,
            'status' => $status['id'],  
            'added_by' => $addedBy,
            'member_id' => $addedBy === 'user' ? null : $this->faker->numberBetween(1, 8),
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\project_steps;
use App\Models\Projects;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProjectStepsSeeder extends Seeder
{
    
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $projectIds = DB::table('projects')->pluck('id')->toArray();
        $steps = [];
        
        for ($i = 1; $i <= 5; $i++) {
            foreach ($projectIds as $projectId) {
                $steps[] = [
                    'step' => $faker->sentence(),
                    'description' => $faker->sentence(20),
                    'amount' => $faker->randomNumber(5),
                    'complete_in_days'=> $faker->numberBetween(1, 30),
                    'project_id' => $projectId,
                    'created_at' => now(),
                ];
            }
        }        
        DB::table('project_steps')->insert($steps);
    }
}

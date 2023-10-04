<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KamaaoBenefitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamaao_benefits = [
           
            ['id' => 1, 'step_title' => 'this is step 1', 'description'=> 'this is step description', 'reward' => '100', 'referance_table'=>'jobs','referance_id' => '1', 'complete_in_days'=>'5'],
            ['id' => 2, 'step_title' => 'this is step 2', 'description'=> 'this is step description', 'reward' => '100', 'referance_table'=>'jobs','referance_id' => '1', 'complete_in_days'=>'5'],
            ['id' => 3, 'step_title' => 'this is step 3', 'description'=> 'this is step description', 'reward' => '100', 'referance_table'=>'jobs','referance_id' => '1', 'complete_in_days'=>'5'],
            ['id' => 4, 'step_title' => 'this is step 4', 'description'=> 'this is step description', 'reward' => '100', 'referance_table'=>'jobs','referance_id' => '1', 'complete_in_days'=>'5'],
            ['id' => 5, 'step_title' => 'this is step 5', 'description'=> 'this is step description', 'reward' => '100', 'referance_table'=>'jobs','referance_id' => '1', 'complete_in_days'=>'5'],
            ['id' => 6, 'step_title' => 'this is step 1', 'description'=> 'this is step description', 'reward' => '100', 'referance_table'=>'jobs','referance_id' => '2', 'complete_in_days'=>'5'],
            ['id' => 7, 'step_title' => 'this is step 2', 'description'=> 'this is step description', 'reward' => '100', 'referance_table'=>'jobs','referance_id' => '2', 'complete_in_days'=>'5'],
            ['id' => 8, 'step_title' => 'this is step 3', 'description'=> 'this is step description', 'reward' => '100', 'referance_table'=>'jobs','referance_id' => '2', 'complete_in_days'=>'5'],
            ['id' => 9, 'step_title' => 'this is step 4', 'description'=> 'this is step description', 'reward' => '100', 'referance_table'=>'jobs','referance_id' => '2', 'complete_in_days'=>'5'],
            ['id' => 10, 'step_title' => 'this is step 5', 'description'=> 'this is step description', 'reward' => '100', 'referance_table'=>'jobs','referance_id' => '2', 'complete_in_days'=>'5'],
        ];
        DB::table('kamaao_benefits')->insert($kamaao_benefits);
        $faker = Faker::create();

        $projectsWithBenefits = DB::table('projects')->where('has_kamaao_benefits', true)->pluck('id');

        $kamaao_benefits = [];

        foreach ($projectsWithBenefits as $projectId) {
            for ($i = 1; $i <= $faker->numberBetween(1, 5); $i++) {
                $kamaao_benefits[] = [
                    'step_title' => 'this is step ' . $i,
                    'description' => 'this is step description',
                    'reward' => '100',
                    'referance_table' => 'projects',
                    'referance_id' => $projectId,
                    'complete_in_days' => '5',
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('kamaao_benefits')->insert($kamaao_benefits);
    }
}

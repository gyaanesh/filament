<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ProjectBenefitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */

        $faker = Faker::create();

        $projectIds = DB::table('projects')->pluck('id');

        foreach ($projectIds as $projectId) {
            $benefits = [];

            for ($i = 1; $i <= $faker->numberBetween(1, 5); $i++) {
                $benefits[] = [
                    'benefit' => $faker->sentence(),
                    'project_id' => $projectId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            DB::table('project_benefits')->insert($benefits);
        }
    }
}

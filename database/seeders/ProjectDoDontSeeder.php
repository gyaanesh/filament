<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProjectDoDontSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $projectIds = DB::table('projects')->pluck('id');

        $guidelines = [];

        foreach ($projectIds as $projectId) {
            for ($i = 1; $i <= $faker->numberBetween(3, 8); $i++) {
                $guidelines[] = [
                    'do_dont' => $faker->sentence(),
                    'type' => $faker->boolean ? '1' : '0', // Randomly set 'do' or 'dont'
                    'project_id' => $projectId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('project_do_donts')->insert($guidelines);
    }
}

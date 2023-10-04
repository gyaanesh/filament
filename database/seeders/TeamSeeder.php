<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $skills = [
            ['id' => 1, 'team_name' => 'Lightning Porcupine', 'team_owner' => 1]
        ];

        DB::table('teams')->insert($skills);
    }
}

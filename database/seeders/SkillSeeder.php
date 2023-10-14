<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            ['id' => 1, 'skill' => 'Bike Driving', 'icon' => 'images/skills/bikeDriving.png'],
            ['id' => 2, 'skill' => 'Laptop', 'icon' => 'images/skills/Laptop.png'],
            ['id' => 3, 'skill' => 'Car Driving', 'icon' => 'images/skills/carDriving.png'],
            ['id' => 4, 'skill' => 'Sales & Marketing', 'icon' => 'images/skills/salemarketing.png'],
            ['id' => 5, 'skill' => 'Smart Phone', 'icon' => 'images/skills/smartPhone.png'],
            ['id' => 6, 'skill' => 'English Speaking', 'icon' => 'images/skills/englishSpeaking.png'],
        ];

        DB::table('skills')->insert($skills);
    }
}

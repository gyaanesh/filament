<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class requirements_in_jobs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $requirements = [
            ["requirement"     => 'Bike', 'requirement_id'=> '1', 'type'=> 'assets',  "job_id"=> '1'],
            ["requirement"     => 'E-Bike', 'requirement_id'=> '2', 'type'=> 'assets',  "job_id"=>'1'],
            ["requirement"     => 'Car', 'requirement_id'=> '3', 'type'=> 'assets',  "job_id"=>'1'],
            ["requirement"     => 'Bike Driving', 'requirement_id'=> '1', 'type'=> 'skills',  "job_id"=> '1'],
            ["requirement"     => 'Laptop', 'requirement_id'=> '2', 'type'=> 'skills',  "job_id"=>'1'],
            ["requirement"     => 'Bike', 'requirement_id'=> '1',   'type'=> 'assets',  "job_id"=> '2'],
            ["requirement"     => 'E-Bike', 'requirement_id'=> '2', 'type'=> 'assets',  "job_id"=>'2'],
            ["requirement"     => 'Bike Driving', 'requirement_id'=> '1', 'type'=> 'skills',  "job_id"=> '2'],
            ["requirement"     => 'Laptop', 'requirement_id'=> '2', 'type'=> 'skills',  "job_id"=>'2'],
            ["requirement"     => 'Car Driving', 'requirement_id'=> '3',    'type'=> 'skills',  "job_id"=>'2'],             
        ];
        DB::table('requirements_in_jobs')->insert($requirements);
    }
}

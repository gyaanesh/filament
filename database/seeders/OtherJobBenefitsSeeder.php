<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OtherJobBenefitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $benefits = [
            ['id' => 1, 'benefit' => 'this is benefit 1', 'job_id' => '1'],
            ['id' => 2, 'benefit' => 'this is benefit 2', 'job_id' => '1'],
            ['id' => 3, 'benefit' => 'this is benefit 3', 'job_id' => '1'],
            ['id' => 4, 'benefit' => 'this is benefit 4', 'job_id' => '1'],
            ['id' => 5, 'benefit' => 'this is benefit 5', 'job_id' => '1'],
            ['id' => 6, 'benefit' => 'this is benefit 1', 'job_id' => '2'],
            ['id' => 7, 'benefit' => 'this is benefit 2', 'job_id' => '2'],
            ['id' => 8, 'benefit' => 'this is benefit 3', 'job_id' => '2'],
            ['id' => 9, 'benefit' => 'this is benefit 4', 'job_id' => '2'],
            ['id' => 10,'benefit' => 'this is benefit 5', 'job_id' => '2'],
           
        ];
        DB::table('other_job_benefits')->insert($benefits);
    }
}

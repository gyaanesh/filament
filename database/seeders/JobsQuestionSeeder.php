<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'job_id' => '1',
                'question' => 'Which Of The Following Do You Have?',
                 
            ],
            [
                'job_id' => '1',
                'question' => 'Which Of The Following Do You Have?',
            ],
            [
                'job_id' => '2',
                'question' => 'Which Of The Following Do You Have?',
                 
            ],
            [
                'job_id' => '2',
                'question' => 'Which Of The Following Do You Have?',
            ],
           
             
        ];
        DB::table('jobs_questions')->insert($questions);
    }
}

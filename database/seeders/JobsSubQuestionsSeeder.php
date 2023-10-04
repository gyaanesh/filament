<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsSubQuestionsSeeder extends Seeder
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
                'question_id' => '1',
                'subquestion' => 'do you have car ?',
                'answer' => 'yes',
            ],
            [
                'question_id' => '1',
                'subquestion' => 'do you have bike ?',
                'answer' => 'yes',
            ],
            [
                'question_id' => '1',
                'subquestion' => 'do you have Helmet ?',
                'answer' => 'Yes',
            ],
            [
                'question_id' => '2',
                'subquestion' => 'do you have a smartphone?',
                'answer' => 'Yes',
            ],
            [
                'question_id' => '2',
                'subquestion' => 'did you ever worked in this company?',
                'answer' => 'No',
            ],
            [
                'question_id' => '2',
                'subquestion' => 'do you have a valid 2 wheeler Driving License ?',
                'answer' => 'Yes',
            ],
            [
                'question_id' => '3',
                'subquestion' => 'are You Comfortable in night Shifts ?',
                'answer' => 'yes',
            ],

            [
                'question_id' => '3',
                'subquestion' => 'do you have car ?',
                'answer' => 'yes',
            ],
            [
                'question_id' => '4',
                'subquestion' => 'do you have bike ?',
                'answer' => 'yes',
            ],
            [
                'question_id' => '4',
                'subquestion' => 'do you have Helmet ?',
                'answer' => 'Yes',
            ],
            [
                'question_id' => '4',
                'subquestion' => 'do you have a smartphone?',
                'answer' => 'Yes',
            ],
            [
                'question_id' => '4',
                'subquestion' => 'did you ever worked in this company?',
                'answer' => 'No',
            ],
             
        ];
        DB::table('jobs_sub_questions')->insert($questions);
    }
}

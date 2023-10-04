<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutorialsSeederForCourse extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all courses from the 'courses' table
        $courses = DB::table('courses')->get();

        // Define the tutorial data template
        $tutorialDataTemplate = [
            "banner"    => "images/banners/banner2.png",
            "status"    => 1,
            "duration"  => "12:47",
            "url"       => "https://youtu.be/Hzi3PDz1AWU",
        ];

        // Initialize an array to store tutorial data for insertion
        $dataToInsert = [];

        foreach ($courses as $course) {
            // Create 5 tutorials for each course
            for ($i = 1; $i <= 5; $i++) {
                $tutorialData = array_merge(
                    $tutorialDataTemplate,
                    [
                        "title"     => "Tutorial {$i} for '{$course->title}'",
                        "course_id" => $course->id,
                        "banner"    => "images/banners/banner2.png",
                        "status"    => "1",
                        "duration"  =>  "12:47",
                        "url"       =>  "https://youtu.be/Hzi3PDz1AWU",
                        "video_type" => "course"
                    ]
                );

                $dataToInsert[] = $tutorialData;
            }
        }

        // Insert the tutorials into the 'tutorials' table
        DB::table('tutorials')->insert($dataToInsert);
    }
}

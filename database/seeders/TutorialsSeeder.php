<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutorialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tutorialData = [
            [
                "title"     =>  "'How to Meditate' for Beginners",
                "banner"    => "images/banners/banner2.png",
                "job_id"    => "1",
                "status"    => "1",
                "duration"  =>  "12:47",
                "url"       =>  "https://youtu.be/Hzi3PDz1AWU",
                "video_type" => "tutorial" // Set the video type to "tutorial"
            ],
            [
                "title"     =>  "'How to learn English in 40 days",
                "banner"    => "images/banners/banner2.png",
                "job_id"    => "2",
                "status"    => "1",
                "duration"  =>  "10:47",
                "url"       =>  "https://youtu.be/Hzi3PDz1AWU",
                "video_type" => "tutorial" // Set the video type to "tutorial"
            ],
            [
                "title"     =>  "How to Make Resume in 10 minutes",
                "banner"    => "images/banners/banner2.png",
                "job_id"    => "3",
                "status"    => "1",
                "duration"  =>  "15:47",
                "url"       =>  "https://youtu.be/Hzi3PDz1AWU",
                "video_type" => "tutorial" // Set the video type to "tutorial"
            ],
        ];
        $kamaaoVideoData = [
            [
                "title"     =>  "'How to Meditate' for Beginners",
                "banner"    => "images/banners/banner2.png",
                "job_id"    => "1",
                "status"    => "1",
                "duration"  =>  "12:47",
                "url"       =>  "https://youtu.be/Hzi3PDz1AWU",
                "video_type" => "kamaao" // Set the video type to "kamaao"
            ],
            [
                "title"     =>  "'How to learn English in 40 days",
                "banner"    => "images/banners/banner2.png",
                "job_id"    => "2",
                "status"    => "1",
                "duration"  =>  "10:47",
                "url"       =>  "https://youtu.be/Hzi3PDz1AWU",
                "video_type" => "kamaao" // Set the video type to "kamaao"
            ],
            [
                "title"     =>  "How to Make Resume in 10 minutes",
                "banner"    => "images/banners/banner2.png",
                "job_id"    => "3",
                "status"    => "1",
                "duration"  =>  "15:47",
                "url"       =>  "https://youtu.be/Hzi3PDz1AWU",
                "video_type" => "kamaao" // Set the video type to "kamaao"
            ],
        ];
        
        $dataToInsert = [];
        for ($i = 0; $i < 20; $i++) {
            $dataToInsert = array_merge($dataToInsert, $tutorialData, $kamaaoVideoData);
        }


        // Insert the tutorials into the 'tutorials' table
        DB::table('tutorials')->insert($dataToInsert);
       
        //
    }
}

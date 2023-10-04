<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class knowledgebaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            [
                'question' => 'What is kamaao app?',
                'answer' => 'Kamaao is an app that helps blue and grey collar employees in increasing their day-to-day income at least by 100%. And when it comes to UI/UX or Design, our app stands out from our all-top competitors like Workindia, Apna, Naukri, Gig India, Gig Force, Taskmo etc. Our UI is simple and modern, based on a method we call "Tick-Tick-GO" There are very limited fields to fill while user is in signing-up or onboarding process. So, the users can quickly sign up in the app by just selecting the relevant options and filling some personal basic information.'
            ],
        ];
        DB::table('knowledge_base')->insert($faqs);
    }
}

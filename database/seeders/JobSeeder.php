<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\jobs_Sub_Questions;
use App\Models\JobsQuestion;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    // Define job titles and categories
    const JOB_TITLES = ['Software Engineer', 'Web Developer', 'Data Analyst', 'Project Manager'];
    const JOB_CATEGORIES = ['1', '2', '3', '4'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Run the database seeds.
         *
         * @return void
         */

        $faker = Faker::create();
        // Loop to create 50 unique jobs
        for ($i = 0; $i < 50; $i++) {
            DB::table('jobs')->insert([
                // Generate random job data
                'title' => self::JOB_TITLES[array_rand(self::JOB_TITLES)] . $i,
                'type' => $faker->randomElement(['partTime', 'fulltime', 'contract']),
                'category' => self::JOB_CATEGORIES[array_rand(self::JOB_CATEGORIES)],
                'is_expired' => 0,
                'last_date' => $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
                'total_openings' => $totalOpenings = $faker->numberBetween(1, 10),
                'opening_left' => $faker->numberBetween(0, $totalOpenings),
                'min_salary' => $min = $faker->numberBetween(20000, 50000),
                'max_salary' => $faker->numberBetween($min, 50000),
                'company_id' => Company::inRandomOrder()->first()->id,
                'job_address' =>   $faker->address(),
                'job_latitude' => $faker->latitude(),
                'job_longitude' => $faker->longitude(),
                'education_required' => $faker->randomElement(['High School Diploma', 'Bachelor\'s Degree', 'Master\'s Degree', 'PhD']),
                'fresher_can_apply' => $faker->boolean(),
                'experience_required' => $faker->optional()->numberBetween(1, 24),
                'working_days' => $faker->randomElement(['Monday-Friday', 'Monday-Saturday']),
                'working_shift' => 'Day Shift',
                'shift_timing' => $faker->time('H:i A') . ' - ' . $faker->time('H:i A'),
                'tag_kamaao' => $tag_kamaao = $faker->boolean(),
                'kamaao_benefits' => $tag_kamaao ? $faker->boolean() : null,
                'tag_premium' => $faker->boolean(),
                'tag_verified' => $faker->boolean(),
                'is_enabled' => $faker->boolean(),
                'like_count' => $faker->numberBetween(0, 100),
                'number_of_applications' => $faker->numberBetween(0, 1000),
                'job_summery' => $faker->paragraph(),
                'notes' => $faker->paragraph(),
                'english_level' => $faker->randomElement(['Basic', 'Intermediate', 'Advanced']),
                'has_a_webinar' => $webinar = $faker->boolean(),
                'has_an_upcoming_webinar' => $upcomingWebinar = $webinar ? $faker->boolean() : 0,
                'upcoming_webinar_id' => $upcomingWebinar ? $faker->numberBetween(1, 5) : null,
                'joining_fee_required' => $joiningFeeRequired = $faker->boolean(),
                'joining_fee' => ($joiningFeeRequired) ? rand(500, 5000) : null,
                'joining_fee_for' => ($joiningFeeRequired) ? 'Lifetime access' : null,
                'has_tutorials' => $hasTutorials = rand(0, 1),
                'tutorial_id' => $hasTutorials ? rand(1, 3) : null,
                'interview_method' => 'Online Interview',
                'interview_Address' =>  $faker->address(),
                'about_job' => $faker->paragraph(),
                'posted_by_id' => rand(1, 4),
                'created_at' => now(),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationModulesSeeder extends Seeder
{
    public function run()
    {

        $modules = [

            ['id' => 1, 'title' => 'Company'],
            ['id' => 2, 'title' => 'App-Users'],
            ['id' => 3, 'title' => 'jobs'],
            ['id' => 4, 'title' => 'job-categories'],
            ['id' => 5, 'title' => 'projects'],
            ['id' => 6, 'title' => 'project-categories'],
            ['id' => 7, 'title' => 'Roles'],
            ['id' => 8, 'title' => 'Permissions'],
            ['id' => 9, 'title' => 'Employees'],
            ['id' => 10, 'title' => 'webinar'],
            ['id' => 11, 'title' => 'Leads'],
            ['id' => 12, 'title' => 'Assets'],
            ['id' => 13, 'title' => 'lms-leads'],
            ['id' => 14, 'title' => 'lms-followups'],
            ['id' => 15, 'title' => 'lms-meetings'],
            ['id' => 16, 'title' => 'lms-conversions'],
            ['id' => 17, 'title' => 'skills'],
            ['id' => 18, 'title' => 'applications'],
            ['id' => 19, 'title' => 'faqs'],
            ['id' => 20, 'title' => 'learn'],
        ];

        DB::table('application_modules')->insert($modules);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserJobsLeadStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $leads = [
            [
                "Lead_id"    => 1,
                "status"    => 1,               
            ],
            [
                "Lead_id"    => 2,
                "status"    => 2,               
            ],
            [
                "Lead_id"    => 3,
                "status"    => 3,               
            ],
            
        ];
        DB::table('user_job_lead_status')->insert($leads);
    }
}

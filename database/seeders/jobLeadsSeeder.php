<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jobLeadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $leadsData = [
            [
                'job_id' => 1,
                'shared_with'=> 2,
                'lead_for_user' => 1,
                'phone' => '1234567890',
                'name' => 'John Doe',
            ],
            [
                'job_id' => 2,
                'shared_with'=> 2,
                'lead_for_user' => 1,
                'phone' => '9876543210',
                'name' => 'Jane Smith',
            ],
            [
                'job_id' => 3,
                'shared_with'=> 3,
                'lead_for_user' => 1,
                'phone' => '5555555555',
                'name' => 'Mike Johnson',
            ],
        ];
        DB::table('jobs_leads')->insert($leadsData);
    }
}

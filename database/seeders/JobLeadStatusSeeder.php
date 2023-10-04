<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobLeadStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $status = [
            ['id' => 1, 'status' => 'Added', 'created_at' => now()],
            ['id' => 2, 'status' => 'Applied', 'created_at' => now()],
            ['id' => 3, 'status' => 'Selected', 'created_at' => now()],
            ['id' => 4, 'status' => 'Rewarded', 'created_at' => now()],
            ['id' => 5, 'status' => 'Rejected, Duplicate', 'created_at' => now()],
            ['id' => 6, 'status' => 'Rejected, Not Eligible.', 'created_at' => now()],
            ['id' => 7, 'status' => 'Expired', 'created_at' => now()],
            ['id' => 8,'status' => 'Action Required','created_at' => now()],

        ];

        DB::table('job_lead_status')->insert($status);
    
    }
}

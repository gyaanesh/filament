<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationStatusListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['id' => 1, 'status' => 'Pending', 'created_at' => now()],
            ['id' => 2, 'status' => 'Rejected', 'created_at' => now()],
            ['id' => 3, 'status' => 'Duplicate', 'created_at' => now()],
            ['id' => 4, 'status' => 'Rejected, Not Eligible.', 'created_at' => now()],
            ['id' => 5, 'status' => 'Document Verification', 'created_at' => now()],
            ['id' => 6, 'status' => 'Sucessfull', 'created_at' => now()],
            ['id' => 7, 'status' => 'Action Required', 'created_at' => now()],
        ];

        DB::table('application_status_lists')->insert($status);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teamMembers = [
            [
                'name' => 'John Doe',
                'phone' => '1234567890',
                'role' => 'member',
                'otp' => 1234,
                'team_id' => 1,
                'otp_created_at' => now(),
                'otp_verified_at' => now(),
                'otp_verified' => true,
            ],
            [
                'name' => 'Jane Smith',
                'phone' => '9876543210',
                'role' => 'member',
                'otp' => 5678,
                'team_id' => 1,

                'otp_created_at' => now(),
                'otp_verified_at' => now(),
                'otp_verified' => true,
            ],
            [
                'name' => 'Alice Johnson',
                'phone' => '5555555555',
                'role' => 'member',
                'otp' => 9876,
                'team_id' => 1,

                'otp_created_at' => now(),
                'otp_verified_at' => now(),
                'otp_verified' => true,
            ],
            [
                'name' => 'Bob Williams',
                'phone' => '3333333333',
                'role' => 'member',
                'otp' => 2468,
                'team_id' => 1,

                'otp_created_at' => now(),
                'otp_verified_at' => now(),
                'otp_verified' => true,
            ],
            [
                'name' => 'Eve Davis',
                'phone' => '6666666666',
                'role' => 'member',
                'otp' => 1357,
                'team_id' => 1,

                'otp_created_at' => now(),
                'otp_verified_at' => now(),
                'otp_verified' => true,
            ],
            [
                'name' => 'Grace Wilson',
                'phone' => '4444444444',
                'role' => 'member',
                'otp' => 8642,
                'team_id' => 1,

                'otp_created_at' => now(),
                'otp_verified_at' => now(),
                'otp_verified' => true,
            ],
            [
                'name' => 'Tom Anderson',
                'phone' => '2222222222',
                'role' => 'member',
                'otp' => 9753,
                'team_id' => 1,

                'otp_created_at' => now(),
                'otp_verified_at' => now(),
                'otp_verified' => true,
            ],
            [
                'name' => 'Lucy White',
                'phone' => '7777777777',
                'role' => 'member',
                'otp' => 3698,
                'team_id' => 1,

                'otp_created_at' => now(),
                'otp_verified_at' => now(),
                'otp_verified' => true,
            ],
        ];
        // Insert the dummy data into the team_members table
        DB::table('team_members')->insert($teamMembers);
    }
}

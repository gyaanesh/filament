<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppReferralsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $referrals = [
            [
                'user_id' => 1,
                'referred_user_id' => '2',
                'status' => 3,
                'amountRs' => '100',
                'coins' => '50', 
                'IsRewarded'=> false,
                'created_at'=> now()
            ],
            [
                'user_id' => 1,
                'referred_user_id' => '3',
                'status' => 2, 
                'amountRs' => '100',
                'coins' => '50',
                'IsRewarded'=> false,
                'created_at'=> now()
            ]
        ];
        DB::table('app_referrals')->insert($referrals);
    }
}

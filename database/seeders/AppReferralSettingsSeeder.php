<?php

namespace Database\Seeders;

use App\Models\AppReferralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppReferralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_referral_settings')->insert([
            ['referral_type' => 'app', 'referral_amount' => 50, 'referral_coins' => 100, 'status'=>1],
            ['referral_type' => 'job', 'referral_amount' => 30, 'referral_coins' => 50, 'status'=>1],
            ['referral_type' => 'project', 'referral_amount' => 40, 'referral_coins' => 75, 'status'=>1],
        ]);
    }
}

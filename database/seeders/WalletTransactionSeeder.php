<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class WalletTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $trn_type   =   ['Cr', 'DR', 'CRC', 'CE'];
        for ($i = 1; $i <= 50; $i++) {
            DB::table('wallet_transactions')->insert([
                'user_id' => 1,
                'wallet_id' => 1,
                'title' => "Transaction $i",
                'amount' => rand(100, 10000),
                'trn_type' => $faker->randomElement(['Cr', 'DR', 'CRC', 'CE']),
                'created_at' => now(),
            ]);
        }
    }
}

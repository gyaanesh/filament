<?php

namespace Database\Seeders;

use App\Models\app_user;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id' => 1,
                'name' => 'Cypher Man',
                'phone' => 8010714158,
                'email' => 'admin@gmail.com',
                'app_language' => 'en',
                'dob' => '1947-01-26',
                'gender' => 'male',
                'payment_contact_id'=> 'cont_MBGkFYRvL9IQzD',
                'place_id'=>'ChIJnwmW-NQBDTkRQcTwoh8HVtg',
                'latitude'=>'28.7582634',
                'longitude'=>'77.1946018',
                'dob'=>'1990-01-13',
                'razor_fa_id'=>'fa_MExDaz94zRpv6W',
                'razor_fa_id_upi'=>'fa_MBHtWRpbr82zqM',
                'job_preferance_category' => '1, 2, 3',
                'created_at' => now()
            ]
        ];
        $users      = [];
        $faker = Factory::create();
        for ($i = 2; $i < 4; $i++) {
            $users[] =
                [
                    'id'    => $i,
                    'name' => $faker->name,
                    'phone' => $faker->phoneNumber,
                    'email' => $faker->unique()->safeEmail,
                    'app_language' => 'en',
                    'dob' => $faker->date($format = 'Y-m-d', $max = '1990-01-26'),
                    'gender' => $faker->randomElement(['male', 'female']),
                    'job_preferance_category' => '1,3',
                    'created_at' => now(),
                ];
        }

        foreach (array_chunk($users, 1000) as $chunk) {
            app_user::insert($chunk);
        }

        DB::table('app_users')->insert($user);
        
    }
}

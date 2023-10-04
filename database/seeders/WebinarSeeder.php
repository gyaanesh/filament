<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class WebinarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 25; $i++) {
            DB::table('webinars')->insert([
                'title' => $faker->sentence(),
                'banner' => "images/banners/banner2.png",
                'description' => $faker->paragraph(),
                'schedule_date_time' => $faker->dateTimeBetween('+1 week', '+2 week')->format('Y-m-d H:i:s'),
                'for' => $faker->randomElement(['job', 'project', 'task']),
                'reference_id' => $faker->numberBetween(1, 3),
                'url' => 'https://youtu.be/Hzi3PDz1AWU',
                'total_slots' => $faker->numberBetween(100, 200),
                'available_slots' => $faker->numberBetween(5, 100),
                'completed' => 0,
                'created_at' => now(),

            ]);
        }
    }
}

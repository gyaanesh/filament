<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['category' => 'Delivery', 'icon' => 'images/job-category/delivery.png', 'status' => 1, 'created_at' => now()],
            ['category' => 'Werehouse', 'icon' => 'images/job-category/werehouse.png', 'status' => 1, 'created_at' => now()],
            ['category' => 'Cab/Bike Driver', 'icon' => 'images/job-category/cab-driver.png', 'status' => 1, 'created_at' => now()],
            ['category' => 'Data Entry', 'icon' => 'images/job-category/data-entry.png', 'status' => 1, 'created_at' => now()],
            ['category' => 'Sales', 'icon' => 'images/job-category/sales.png', 'status' => 1, 'created_at' => now()],
            ['category' => 'Electrician', 'icon' => 'images/job-category/electrician.png', 'status' => 1, 'created_at' => now()],
            ['category' => 'Office Assitante ', 'icon' => 'images/job-category/sales.png', 'status' => 1, 'created_at' => now()],
            ['category' => 'KYC Field Executive', 'icon' => 'images/job-category/sales.png', 'status' => 1, 'created_at' => now()],
        ];
        DB::table('job_categories')->insert($categories);
    }
}

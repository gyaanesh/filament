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
            ['category' => 'Delivery', 'icon' => 'assets/global_assets/images/app/job-category/delivery.png', 'status' => 1, 'created_at' => now()],
            ['category' => 'Werehouse', 'icon' => 'assets/global_assets/images/app/job-category/werehouse.png', 'status' => 1, 'created_at' => now()],
            ['category' => 'Cab/Bike Driver', 'icon' => 'assets/global_assets/images/app/job-category/cab-driver.png', 'status' => 1, 'created_at' => now()],
            ['category' => 'Data Entry', 'icon' => 'assets/global_assets/images/app/job-category/data-entry.png', 'status' => 1, 'created_at' => now()],
            ['category' => 'Sales', 'icon' => 'assets/global_assets/images/app/job-category/sales.png', 'status' => 1, 'created_at' => now()],
            ['category' => 'Electrician', 'icon' => 'assets/global_assets/images/app/job-category/electrician.png', 'status' => 1, 'created_at' => now()],
            ['category' => 'Office Assitante ', 'icon' => 'assets/global_assets/images/app/job-category/sales.png', 'status' => 1, 'created_at' => now()],
            ['category' => 'KYC Field Executive', 'icon' => 'assets/global_assets/images/app/job-category/sales.png', 'status' => 1, 'created_at' => now()],

        ];
        DB::table('job_categories')->insert($categories);
    }
}

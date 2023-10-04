<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['category'     => 'Banking', 'icon'=>'images/company/zomato.png','status' => 1, 'created_at' => now()],
            ['category'     => 'Insurance', 'icon'=>'images/company/zomato.png','status' => 1, 'created_at' => now()],
            ['category'     => 'Small Gigs','icon'=>'images/company/zomato.png', 'status' => 1, 'created_at' => now()],
            ['category'   => 'kyc',       'icon'=>'images/company/zomato.png','status' => 1, 'created_at' => now()],
            ['category'   => 'Tasks',       'icon'=>'images/company/zomato.png','status' => 1, 'created_at' => now()],
            
        ];
        DB::table('project_categories')->insert($categories);
    }
}

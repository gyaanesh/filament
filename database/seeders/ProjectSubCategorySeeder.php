<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = DB::table('project_categories')->get();

        foreach ($categories as $category) {
            $subcategories = [];
            
            // Generate at least 3 subcategories for each category
            for ($i = 1; $i <= 3; $i++) {
                $subcategories[] = [
                    'category_id' => $category->id,
                    'sub_category' => "Subcategory $i",
                    
                    'created_at' => now(),
                ];
            }
            DB::table('project_sub_categories')->insert($subcategories);
        }
    }
}

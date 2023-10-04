<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\project_categories;
use App\Models\Projects;
use App\Models\ProjectSubCategory;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        
        $faker = Faker::create();

        $companyIds = DB::table('companies')->pluck('id');
        $categoryIds = DB::table('project_categories')->pluck('id');
        $subcategoryIdsByCategory = DB::table('project_sub_categories')
            ->select('category_id', DB::raw('GROUP_CONCAT(id) as subcategory_ids'))
            ->groupBy('category_id')
            ->pluck('subcategory_ids', 'category_id');

        for ($i = 0; $i < 50; $i++) {
            $selectedCategory = $faker->randomElement($categoryIds);
            $selectedSubcategory = $faker->randomElement(
                explode(',', $subcategoryIdsByCategory[$selectedCategory])
            );

            DB::table('projects')->insert([
                'company_id' => $faker->randomElement($companyIds),
                'title' => $faker->sentence(4),
                'description'=> $faker->paragraph(),
                'type' => $faker->word,
                'category' => $selectedCategory,
                'subcategory' => $selectedSubcategory,
                'amount' => $faker->numberBetween(1000, 10000),
                'coins' => $faker->numberBetween(100, 1000),
                'is_trending' => $faker->boolean,
                'start_date' => $faker->date(),
                'end_date' => $faker->date(),
                'is_expired' => $faker->boolean,
                'total_openings' => $faker->numberBetween(1, 20),
                'opening_left' => $faker->numberBetween(0, 20),
                'is_enabled' => $faker->boolean,
                'like_count' => $faker->numberBetween(0, 1000),
                'number_of_applications' => $faker->numberBetween(0, 1000),
                'about' => $faker->paragraph,
                'cta' => $faker->sentence,
                'cta2' => $faker->sentence,
                'tag_kamaao' => $faker->boolean,
                'has_kamaao_benefits' => $faker->boolean,
                'has_a_webinar' => $faker->boolean,
                'webinar_id' => $faker->boolean ? $faker->numberBetween(1, 5) : null,
                'has_an_upcoming_webinar' => $faker->boolean,
                 
                'has_tutorials' => $faker->boolean,
                'tutorials_id' => $faker->boolean ? $faker->url : null,
                'posted_by_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

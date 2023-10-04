<?php
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectShareBannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectIds = DB::table('projects')->pluck('id');

        $shareBanners = [];

        $imageFilenames = [
            'banner1.png',
            'banner2.png',
            'banner3.png',
            'banner4.png',
            'bnr1.jpeg',
            'bnr2.jpeg',
            'bnr3.jpeg',
        ];

        foreach ($projectIds as $projectId) {
            $randomImageIndexes = array_rand($imageFilenames, 4); // Get 4 random image indexes
            foreach ($randomImageIndexes as $index) {
                $filename = $imageFilenames[$index];
                $shareBanners[] = [
                    'banner' => 'images/banners/projects/' . $filename,
                    'project_id' => $projectId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('project_share_banners')->insert($shareBanners);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banners = [
            [
                'banner' => 'images/banners/banner1.png', 'for' => 'jobs',
                'cta_type' => 'app', 'cta' => 'jobs/1', "priority" => 1
            ], [
                'banner' => 'images/banners/banner2.png', 'for' => 'jobs',
                'cta_type' => 'app', 'cta' => 'jobs/2', "priority" => 1
            ],
            [
                'banner' => 'images/banners/banner1.png', 'for' => 'jobs',
                'cta_type' => 'app', 'cta' => 'jobs/3', "priority" => 1
            ],
            [
                'banner' => 'images/banners/banner2.png', 'for' => 'jobs',
                'cta_type' => 'app', 'cta' => 'jobs/4', "priority" => 1
            ],
            [
                'banner' => 'images/banners/banner2.png', 'for' => 'jobs',
                'cta_type' => 'external', 'cta' => 'https://kamaao.app', "priority" => 2
            ],
            [
                'banner' => 'images/banners/banner2.png', 'for' => 'jobs',
                'cta_type' => 'app', 'cta' => 'jobs/2', "priority" => 2
            ],
            [
                'banner' => 'images/banners/banner2.png', 'for' => 'jobs',
                'cta_type' => 'app', 'cta' => 'jobs/2', "priority" => 2
            ],



            // ------------------FOR PROJECTS-----------------
            [
                'banner' => 'images/banners/banner1.png', 'for' => 'projects',
                'cta_type' => 'app', 'cta' => 'projects/1', "priority" => 1
            ], [
                'banner' => 'images/banners/banner2.png', 'for' => 'projects',
                'cta_type' => 'app', 'cta' => 'projects/2', "priority" => 1
            ],
            [
                'banner' => 'images/banners/banner1.png', 'for' => 'projects',
                'cta_type' => 'app', 'cta' => 'projects/2', "priority" => 1
            ],
            [
                'banner' => 'images/banners/banner2.png', 'for' => 'projects',
                'cta_type' => 'app', 'cta' => 'projects/2', "priority" => 1
            ],
            [
                'banner' => 'images/banners/banner2.png', 'for' => 'projects',
                'cta_type' => 'app', 'cta' => 'projects/2', "priority" => 2
            ],
            [
                'banner' => 'images/banners/banner2.png', 'for' => 'projects',
                'cta_type' => 'app', 'cta' => 'projects/2', "priority" => 2
            ],
            [
                'banner' => 'images/banners/banner2.png', 'for' => 'projects',
                'cta_type' => 'app', 'cta' => 'projects/2', "priority" => 2
            ],

            // ------------------FOR DASHBOARD-----------------

            [
                'banner' => 'images/banners/banner2.png', 'for' => 'dashboard',
                'cta_type' => 'app', 'cta' => 'jobs/2', "priority" => 2
            ],
            [
                'banner' => 'images/banners/banner2.png', 'for' => 'dashboard',
                'cta_type' => 'app', 'cta' => 'jobs/1', "priority" => 2
            ],

            /** LEARN BANNER */
            [
                'banner' => 'images/banners/learn/banner1.png', 'for' => 'learn',
                'cta_type' => 'app', 'cta' => '/learn/kamaao-tutorials', "priority" => 2
            ],
            [
                'banner' => 'images/banners/learn/banner2.png', 'for' => 'learn',
                'cta_type' => 'app', 'cta' => '/learn/play/1', "priority" => 2
            ],
            [
                'banner' => 'images/banners/learn/banner3.png', 'for' => 'learn',
                'cta_type' => 'app', 'cta' => '/learn/play/2', "priority" => 2
            ]
        ];
        DB::table('banners')->insert($banners);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class app_assets_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $assets = [
            ['id' => 1, 'assets' => 'Bike', 'icon' => 'assets/global_assets/images/app/assets/bike.png'],
            ['id' => 2, 'assets' => 'E-Bike', 'icon' => 'assets/global_assets/images/app/assets/e-bike.png'],
            ['id' => 3, 'assets' => 'Car', 'icon' => 'assets/global_assets/images/app/assets/car.png'],
            ['id' => 4, 'assets' => 'Bicycle', 'icon' => 'assets/global_assets/images/app/assets/bycicle.png'],
            ['id' => 5, 'assets' => 'Android Mobile', 'icon' => 'assets/global_assets/images/app/assets/android_mobile.png'],
            ['id' => 6, 'assets' => 'IOS Mobile', 'icon' => 'assets/global_assets/images/app/assets/ios_mobile.png'],
            ['id' => 7, 'assets' => 'Computer', 'icon' => 'assets/global_assets/images/app/assets/computer.png'],
            ['id' => 8, 'assets' => 'Laptop', 'icon' => 'assets/global_assets/images/app/assets/laptop.png'],
        ];
        DB::table('assets')->insert($assets);
    }
}

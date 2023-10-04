<?php

namespace Database\Seeders;

use App\Models\Jobs_do_dont;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobsDoDontsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        for ($i = 1; $i <= 2; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                $data[] = [
                    'do_dont' => 'Do something ' . $j,
                    'job_id' => $i,
                ];
            }
        }

        Jobs_do_dont::insert($data);
    }
}

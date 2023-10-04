<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class postJobMigrationUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Update the job table where id is 1 or 2 and set tag_kamaao to 1
        DB::table('jobs')
            ->whereIn('id', [1, 2])
            ->update(['tag_kamaao' => 1, 'kamaao_benefits'=>1]);
    }
}

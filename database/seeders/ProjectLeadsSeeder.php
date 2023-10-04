<?php

namespace Database\Seeders;

use App\Models\ProjectLeads;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectLeadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectLeads::factory(1000)->create();
    }
}

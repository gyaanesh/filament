<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documents = [
            ['id' => 1, 'document_title' => 'PAN CARD', 'document_side' => 'front'],
            ['id' => 2, 'document_title' => 'AADHAR CARD', 'document_side' => 'front'],
            ['id' => 3, 'document_title' => 'AADHAR CARD', 'document_side' => 'back'],
            ['id' => 4, 'document_title' => 'VOTER CARD', 'document_side' => 'front'],
            ['id' => 5, 'document_title' => 'DRIVING LICENSE(DL)', 'document_side' => 'front'],
            ['id' => 6, 'document_title' => 'VEHICLE REGISTRATION CERTIFICATE(RC)', 'document_side' => 'front'],
            ['id' => 7, 'document_title' => 'VEHICLE REGISTRATION CERTIFICATE(RC)', 'document_side' => 'back'],
            ['id' => 8, 'document_title' => 'CHEQUE', 'document_side' => 'front'],
            ['id' => 9, 'document_title' => 'BANK STATEMENT', 'document_side' => 'front'],
        ];
        DB::table('document_types')->insert($documents);
    }
}

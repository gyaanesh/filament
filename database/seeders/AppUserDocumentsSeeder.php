<?php

namespace Database\Seeders;

use App\Models\app_user;
use App\Models\app_user_documents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppUserDocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = app_user::all();

        foreach ($users as $user) {
            app_user_documents::insert([
                'document_type_id' => '1',
                'document' => 'https://example.com/document1.pdf',
                'document_type' => 'front',
                'user_id' => $user->id,
            ]);

            app_user_documents::insert([
                'document_type_id' => '1',
                'document' => 'https://example.com/document1.pdf',
                'document_type' => 'back',
                'user_id' => $user->id,
            ]);

            app_user_documents::insert([
                'document_type_id' => '2',
                'document' => 'https://example.com/document2.pdf',
                'document_type' => 'front',
                'user_id' => $user->id,
            ]);

            app_user_documents::insert([
                'document_type_id' => '2',
                'document' => 'https://example.com/document2.pdf',
                'document_type' => 'back',
                'user_id' => $user->id,
            ]);
        }
    }
}

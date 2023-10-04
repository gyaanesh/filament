<?php

namespace Database\Seeders;

use App\Models\applicationModules;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    const module = [
        ['id' => 1, 'title' => 'Company'],
        ['id' => 2, 'title' => 'App-Users'],
        ['id' => 3, 'title' => 'jobs'],
        ['id' => 4, 'title' => 'job-categories'],
        ['id' => 5, 'title' => 'projects'],
        ['id' => 6, 'title' => 'project-categories'],
        ['id' => 7, 'title' => 'Roles'],
        ['id' => 8, 'title' => 'Permissions'],
        ['id' => 9, 'title' => 'Employees'],
        ['id' => 10, 'title' => 'webinar'],
        ['id' => 11, 'title' => 'Leads'],
        ['id' => 12, 'title' => 'Assets'],
        ['id' => 13, 'title' => 'lms-leads'],
        ['id' => 14, 'title' => 'lms-followups'],
        ['id' => 15, 'title' => 'lms-meetings'],
        ['id' => 16, 'title' => 'lms-conversions'],
        ['id' => 17, 'title' => 'skills'],
        ['id' => 18, 'title' => 'applications'],
        ['id' => 19, 'title' => 'faq'],
        ['id' => 20, 'title' => 'learn'],

    ];
    public function run()
    {
        $modules =  applicationModules::select('id', 'title')->get();
        $permissions    =   [
            // for Module   ['id' => 1, 'title' => 'Company'],
            ['name' =>  'can-create-company', 'module_id' => 1],
            ['name' =>  'can-see-list-of-company', 'module_id' => 1],
            ['name' =>  'can-edit-company', 'module_id' => 1],
            ['name' =>  'can-delete-company', 'module_id' => 1],

            // for Module   ['id' => 2, 'title' => 'App-Users']
            ['name' =>  'see-list-of-app-users', 'module_id' => 2],
            ['name' =>  'see-edit-app-users', 'module_id' => 2],
            ['name' =>  'can-delete-app-users', 'module_id' => 2],

            // for Module   ['id' => 3, 'title' => 'jobs'],
            ['name' =>  'can-create-jobs', 'module_id' => 3],
            ['name' =>  'can-see-list-of-jobs', 'module_id' => 3],
            ['name' =>  'can-edit-jobs', 'module_id' => 3],
            ['name' =>  'can-delete-jobs', 'module_id' => 3],

            // for Module   ['id' => 4, 'title' => 'job-categories'],
            ['name' =>  'can-create-job-categories', 'module_id' => 4],
            ['name' =>  'can-see-list-of-job-categories', 'module_id' => 4],
            ['name' =>  'can-edit-job-categories', 'module_id' => 4],
            ['name' =>  'can-delete-job-categories', 'module_id' => 4],

            // for Module   ['id' => 5, 'title' => 'projects'],
            ['name' =>  'can-create-projects', 'module_id' => 5],
            ['name' =>  'can-see-list-of-projects', 'module_id' => 5],
            ['name' =>  'can-edit-projects', 'module_id' => 5],
            ['name' =>  'can-delete-projects', 'module_id' => 5],

            // for Module   ['id' => 6, 'title' => 'projects-categories'],
            ['name' =>  'can-create-project-categories', 'module_id' => 6],
            ['name' =>  'can-see-list-of-project-categories', 'module_id' => 6],
            ['name' =>  'can-edit-project-categories', 'module_id' => 6],
            ['name' =>  'can-delete-project-categories', 'module_id' => 6],

            // for Module   ['id' => 7, 'title' => 'Roles']
            ['name' =>  'can-create-roles', 'module_id' => 7],
            ['name' =>  'can-see-list-of-roles', 'module_id' => 7],
            ['name' =>  'can-edit-roles', 'module_id' => 7],
            ['name' =>  'can-delete-roles', 'module_id' => 7],

            // for Module   ['id' => 8, 'title' => 'Permissions'],
            ['name' =>  'can-create-permissions', 'module_id' => 8],
            ['name' =>  'can-see-list-of-permissions', 'module_id' => 8],
            ['name' =>  'can-edit-permissions', 'module_id' => 8],
            ['name' =>  'can-delete-permissions', 'module_id' => 8],


            // for Module   ['id' => 9, 'title' => 'Employees']
            ['name' =>  'can-create-employees', 'module_id' => 9],
            ['name' =>  'can-see-list-of-employees', 'module_id' => 9],
            ['name' =>  'can-edit-employees', 'module_id' => 9],
            ['name' =>  'can-delete-employees', 'module_id' => 9],


            // for Module   ['id' => 10, 'title' => 'webinar'],
            ['name' =>  'can-create-webinars', 'module_id' => 10],
            ['name' =>  'can-see-list-of-webinars', 'module_id' => 10],
            ['name' =>  'can-edit-webinars', 'module_id' => 10],
            ['name' =>  'can-delete-webinars', 'module_id' => 10],

            // for Module   ['id' => 11, 'title' => 'Leads'],
            ['name' =>  'can-create-leads', 'module_id' => 11],
            ['name' =>  'can-see-list-of-leads', 'module_id' => 11],
            ['name' =>  'can-edit-leads', 'module_id' => 11],
            ['name' =>  'can-delete-leads', 'module_id' => 11],

            // for Module   ['id' => 12, 'title' => 'Assets'],
            ['name' =>  'can-create-assets', 'module_id' => 12],
            ['name' =>  'can-see-list-of-assets', 'module_id' => 12],
            ['name' =>  'can-edit-assets', 'module_id' => 12],
            ['name' =>  'can-delete-assets', 'module_id' => 12],

            // for Module   ['id' => 13, 'title' => 'lms-leads'],
            ['name' =>  'can-create-lms-leads', 'module_id' => 13],
            ['name' =>  'can-see-list-of-lms-leads', 'module_id' => 13],
            ['name' =>  'can-edit-lms-leads', 'module_id' => 13],
            ['name' =>  'can-delete-lms-leads', 'module_id' => 13],


            // for Module   ['id' => 14, 'title' => 'lms-followups'],
            ['name' =>  'can-create-lms-followups', 'module_id' => 14],
            ['name' =>  'can-see-list-of-lms-followups', 'module_id' => 14],
            ['name' =>  'can-edit-lms-followups', 'module_id' => 14],
            ['name' =>  'can-delete-lms-followups', 'module_id' => 14],

            // for Module   ['id' => 15, 'title' => 'lms-meetings'],
            ['name' =>  'can-create-lms-meetings', 'module_id' => 15],
            ['name' =>  'can-see-list-of-lms-meetings', 'module_id' => 15],
            ['name' =>  'can-edit-lms-meetings', 'module_id' => 15],
            ['name' =>  'can-delete-lms-meetings', 'module_id' => 15],

            // for Module   ['id' => 16, 'title' => 'lms-conversions']

            ['name' =>  'can-see-list-of-lms-conversions', 'module_id' => 16],
            ['name' =>  'can-edit-lms-conversions', 'module_id' => 16],
            ['name' =>  'can-delete-lms-conversions', 'module_id' => 16],

            // for Module   ['id' => 17, 'title' => 'skills'],
            ['name' =>  'can-create-skills', 'module_id' => 17],
            ['name' =>  'can-see-list-of-skills', 'module_id' => 17],
            ['name' =>  'can-edit-skills', 'module_id' => 17],
            ['name' =>  'can-delete-skills', 'module_id' => 17],

            // for Module   ['id' => 18, 'title' => 'applications'],

            ['name' =>  'can-create-applications', 'module_id' => 18],
            ['name' =>  'can-see-list-of-applications', 'module_id' => 18],
            ['name' =>  'can-edit-applications', 'module_id' => 18],
            ['name' =>  'can-delete-applications', 'module_id' => 18],

            // for Module   ['id' => 19, 'title' => 'faq'],

            ['name' =>  'can-create-faqs', 'module_id' => 19],
            ['name' =>  'can-see-list-of-faqs', 'module_id' => 19],
            ['name' =>  'can-edit-faqs', 'module_id' => 19],
            ['name' =>  'can-delete-faqs', 'module_id' => 19],

            // for Module   ['id' => 20, 'title' => 'learn']

            ['name' =>  'can-create-learn', 'module_id' => 20],
            ['name' =>  'can-see-list-of-learn', 'module_id' => 20],
            ['name' =>  'can-edit-learn', 'module_id' => 20],
            ['name' =>  'can-delete-learn', 'module_id' => 20],
        ];
        $telecallerPermissons = [
            'can-create-lms-leads',
            'can-see-list-of-lms-leads',
            'can-edit-lms-leads',
            'can-delete-lms-leads',
            'can-create-lms-followups',
            'can-see-list-of-lms-followups',
            'can-edit-lms-followups',
            'can-delete-lms-followups',

            'can-create-lms-meetings',
            'can-see-list-of-lms-meetings',
            'can-edit-lms-meetings',
            'can-delete-lms-meetings',


            'can-see-list-of-lms-conversions',
            'can-edit-lms-conversions',

        ];
        foreach ($permissions as $permission) {

            Permission::create(
                ['guard_name' => 'web', 'name' =>  Str::lower($permission['name']), 'module_id' => $permission['module_id']]
            );
        }

        $user = User::create([
            "name" => "Prognomic",
            "email" => 'admin@gmail.com',
            "password" => Hash::make('Admin@1on1'),
            "role" => "Super Admin",
            "enc_pass" => 'admin@1on1',
            "created_at" => now(),
            "updated_at" => now()
        ]);

        $role = Role::create(['guard_name' => 'web', 'name' => 'Super Admin']);
        $role->givePermissionTo(Permission::all());
        $user->assignRole($role);


        // Create A New Role telecaller
        $telecaller = Role::create(['guard_name' => 'web', 'name' => 'telecaller']);
        $telecaller->givePermissionTo($telecallerPermissons);

        $user = User::create([
            "name" => "khushi",
            "email" => 'khushi@gmail.com',
            "password" => Hash::make('Khushi@1on1'),
            "role" => "telecaller",
            "enc_pass" => 'Khushi@1on1',
            "created_at" => now(),
            "updated_at" => now()
        ]);
        $user->assignRole($telecaller);


        $user = User::create([
            "name" => "Parul",
            "email" => 'Parul@gmail.com',
            "password" => Hash::make('Parul@1on1'),
            "role" => "telecaller",
            "enc_pass" => 'Parul@1on1',
            "created_at" => now(),
            "updated_at" => now()
        ]);
        $user->assignRole($telecaller);

        $user = User::create([
            "name" => "Sapna",
            "email" => 'sapna@gmail.com',
            "password" => Hash::make('Sapna@1on1'),
            "role" => "telecaller",
            "enc_pass" => 'Sapna@1on1',
            "created_at" => now(),
            "updated_at" => now()
        ]);
        $user->assignRole($telecaller);
    }
}

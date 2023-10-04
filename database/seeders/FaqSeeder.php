<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faqs = [
            [
                'question' => 'What is Laravel?',
                'answer' => 'Laravel is a free, open-source PHP web framework.'
            ],
            [
                'question' => 'What is a seeder?',
                'answer' => 'A seeder is used to populate database tables with sample data.'
            ],
            [
                'question' => 'How do you create a seeder in Laravel?',
                'answer' => 'You can create a seeder using the "make:seeder" Artisan command.'
            ],
            [
                'question' => 'What is the latest version of Laravel?',
                'answer' => 'As of March 2023, the latest version of Laravel is 9.6.1.'
            ],
            [
                'question' => 'What is a migration in Laravel?',
                'answer' => 'A migration is a way to modify the database schema using PHP code.'
            ],
            [
                'question' => 'What is an Eloquent model in Laravel?',
                'answer' => 'An Eloquent model is a PHP class that represents a database table and provides methods for interacting with its data.'
            ],
            [
                'question' => 'What is the default database driver used by Laravel?',
                'answer' => 'The default database driver used by Laravel is MySQL.'
            ],
            [
                'question' => 'What is the purpose of the "composer.json" file in Laravel?',
                'answer' => 'The "composer.json" file defines the dependencies and configuration for a Laravel project.'
            ],
            [
                'question' => 'What is the difference between "public" and "storage" directories in Laravel?',
                'answer' => 'The "public" directory contains publicly accessible files such as CSS and JavaScript assets, while the "storage" directory contains private files such as uploaded user content.'
            ],
            [
                'question' => 'What is the purpose of the "php artisan tinker" command in Laravel?',
                'answer' => 'The "php artisan tinker" command provides an interactive shell for executing Laravel code and interacting with the application\'s models and services.'
            ],
            [
                'question' => 'What is the purpose of middleware in Laravel?',
                'answer' => 'Middleware provides a way to filter HTTP requests and responses in Laravel, allowing you to perform actions such as authentication or validation.'
            ],
            [
                'question' => 'What is the purpose of the "php artisan make:controller" command in Laravel?',
                'answer' => 'The "php artisan make:controller" command generates a new controller class for handling HTTP requests and responses.'
            ],
            [
                'question' => 'What is the purpose of the "php artisan make:model" command in Laravel?',
                'answer' => 'The "php artisan make:model" command generates a new Eloquent model class for interacting with a database table.'
            ],
            [
                'question' => 'What is the purpose of the "php artisan make:migration" command in Laravel?',
                'answer' => 'The "php artisan make:migration" command generates a new migration file for modifying the database schema.'
            ], [
                'question' => 'What is the purpose of the "php artisan migrate" command in Laravel?',
                'answer' => 'The "php artisan migrate" command runs any pending database migrations and updates the database schema.'
            ],
            [
                'question' => 'What is the purpose of the "php artisan serve" command in Laravel?',
                'answer' => 'The "php artisan serve" command starts a local development server for the Laravel application.'
            ],
            [
                'question' => 'What is the purpose of the "blade" templating engine in Laravel?',
                'answer' => 'The "blade" templating engine provides a simple, yet powerful way to write HTML templates with PHP code in Laravel.'
            ],
            [
                'question' => 'What is the purpose of the "composer install" command in Laravel?',
                'answer' => 'The "composer install" command installs the dependencies defined in the "composer.json" file for a Laravel project.'
            ],
            [
                'question' => 'What is the purpose of the "config" directory in Laravel?',
                'answer' => 'The "config" directory contains configuration files for the Laravel application, such as database settings, cache settings, and more.'
            ],
            [
                'question' => 'What is the purpose of the "public/index.php" file in Laravel?',
                'answer' => 'The "public/index.php" file is the entry point for a Laravel application, and it handles all incoming HTTP requests.'
            ],
            [
                'question' => 'What is the purpose of the "routes/web.php" file in Laravel?',
                'answer' => 'The "routes/web.php" file defines the application routes for handling HTTP requests in a Laravel application.'
            ],
            [
                'question' => 'What is the purpose of the "artisan" command in Laravel?',
                'answer' => 'The "artisan" command is the command-line interface for interacting with a Laravel application, and it provides a variety of useful commands for tasks such as database migrations, testing, and more.'
            ],
            [
                'question' => 'What is the purpose of the "env" file in Laravel?',
                'answer' => 'The ".env" file contains environment-specific configuration settings for a Laravel application, such as database credentials and API keys.'
            ],
            [
                'question' => 'What is the purpose of the "composer dump-autoload" command in Laravel?',
                'answer' => 'The "composer dump-autoload" command updates the autoloader files for a Laravel project, which allows the application to find and load class files more efficiently.'
            ],
        ];
        DB::table('faqs')->insert($faqs);
    }
}

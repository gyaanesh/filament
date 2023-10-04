<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $courses = [
            [
                'title' => 'Web Development Fundamentals',
                'description' => 'Learn the basics of web development.',
                'banner' => 'https://example.com/banners/web-dev.png',
                'duration' => '5 hours',
                'status' => 1,
                'number_of_likes' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Python Programming for Beginners',
                'description' => 'Get started with Python programming.',
                'banner' => 'https://example.com/banners/python.png',
                'duration' => '4.5 hours',
                'status' => 1,
                'number_of_likes' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Data Science Essentials',
                'description' => 'Explore the world of data science.',
                'banner' => 'https://example.com/banners/data-science.png',
                'duration' => '6 hours',
                'status' => 1,
                'number_of_likes' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'JavaScript Mastery',
                'description' => 'Become a JavaScript expert.',
                'banner' => 'https://example.com/banners/javascript.png',
                'duration' => '7 hours',
                'status' => 1,
                'number_of_likes' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mobile App Development with React Native',
                'description' => 'Learn to build mobile apps with React Native.',
                'banner' => 'https://example.com/banners/react-native.png',
                'duration' => '5.5 hours',
                'status' => 1,
                'number_of_likes' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Machine Learning Foundations',
                'description' => 'Get started with the fundamentals of machine learning.',
                'banner' => 'https://example.com/banners/machine-learning.png',
                'duration' => '6 hours',
                'status' => 1,
                'number_of_likes' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Java Programming for Beginners',
                'description' => 'Learn the basics of Java programming.',
                'banner' => 'https://example.com/banners/java.png',
                'duration' => '5.5 hours',
                'status' => 1,
                'number_of_likes' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Digital Marketing Mastery',
                'description' => 'Master the art of digital marketing.',
                'banner' => 'https://example.com/banners/digital-marketing.png',
                'duration' => '7 hours',
                'status' => 1,
                'number_of_likes' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'AI and Ethics',
                'description' => 'Explore the ethical aspects of artificial intelligence.',
                'banner' => 'https://example.com/banners/ai-ethics.png',
                'duration' => '4.5 hours',
                'status' => 1,
                'number_of_likes' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Front-End Web Development',
                'description' => 'Learn front-end web development techniques.',
                'banner' => 'https://example.com/banners/frontend-web.png',
                'duration' => '6.5 hours',
                'status' => 1,
                'number_of_likes' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('courses')->insert($courses);

    }
}

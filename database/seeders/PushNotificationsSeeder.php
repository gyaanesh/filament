<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PushNotificationsSeeder extends Seeder
{
/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notifications = [
            [
                'title' => 'New Job Opening',
                'body' => 'A new job opening is available. Apply now!',
                'icon' => 'images/notifications/notification-icon.png',
                'type' => 'jobs',
                'action' => 'jobs/delivery/1',
                'is_sent' => true,
                'is_read' => (bool) rand(0, 1),
                'user_id' => 1,
            ],
            [
                'title' => 'Project Update',
                'body' => 'The project deadline has been extended. Check the details.',
                'icon' => 'images/notifications/notification-icon.png',
                'type' => 'projects',
                'action' => 'wallet',
                'is_sent' => false,
                'is_read' => (bool) rand(0, 1),
                'user_id' => 1,
            ],
            
            // Additional notifications
            // ... (Previous notifications)
            [
                'title' => 'KYC Update Required',
                'body' => 'Please update your KYC information for account verification.',
                'icon' => 'images/notifications/notification-icon.png',
                'type' => 'account',
                'action' => 'kyc_status',
                'is_sent' => true,
                'is_read' => (bool) rand(0, 1),
                'user_id' => 1,
            ],
            [
                'title' => 'Wallet Transaction',
                'body' => 'A new transaction has been recorded in your wallet. View details.',
                'icon' => 'images/notifications/notification-icon.png',
                'type' => 'wallet',
                'action' => 'wallet',
                'is_sent' => false,
                'is_read' => (bool) rand(0, 1),
                'user_id' => 1,
            ],
            // ... (More notifications)
            [
                'title' => 'Job Application Status',
                'body' => 'Your job application status has been updated. Check it now.',
                'icon' => 'images/notifications/notification-icon.png',
                'type' => 'jobs',
                'action' => 'jobs/delivery/1',
                'is_sent' => true,
                'is_read' => (bool) rand(0, 1),
                'user_id' => 1,
            ],
            [
                'title' => 'Job Tracking Update',
                'body' => 'An update has been made to your job tracking. Stay informed.',
                'icon' => 'images/notifications/notification-icon.png',
                'type' => 'jobs',
                'action' => 'my_jobs/tracking/1',
                'is_sent' => false,
                'is_read' => (bool) rand(0, 1),
                'user_id' => 1,
            ], 
            [
                'title' => 'New Category Added',
                'body' => 'A new job category has been added. Explore new opportunities.',
                'icon' => 'images/notifications/notification-icon.png',
                'type' => 'jobs',
                'action' => 'jobs_category/1',
                'is_sent' => true,
                'is_read' => (bool) rand(0, 1),
                'user_id' => 1,
            ],
            [
                'title' => 'Notification Preferences',
                'body' => 'Manage your notification preferences on the notification page.',
                'icon' => 'images/notifications/notification-icon.png',
                'type' => 'settings',
                'action' => 'notification_page/jobs',
                'is_sent' => false,
                'is_read' => (bool) rand(0, 1),
                'user_id' => 1,
            ],
            [
                'title' => 'Job Application Status',
                'body' => 'Your job application status has been updated. Check it now.',
                'icon' => 'images/notifications/notification-icon.png',
                'type' => 'jobs',
                'action' => 'jobs/delivery/1',
                'is_sent' => true,
                'is_read' => (bool) rand(0, 1),
                'user_id' => 1,
            ],
            [
                'title' => 'Job Tracking Update',
                'body' => 'An update has been made to your job tracking. Stay informed.',
                'icon' => 'images/notifications/notification-icon.png',
                'type' => 'jobs',
                'action' => 'my_jobs/tracking/1',
                'is_sent' => false,
                'is_read' => (bool) rand(0, 1),
                'user_id' => 1,
            ],
            // ... (Even more notifications)
            [
                'title' => 'New Category Added',
                'body' => 'A new job category has been added. Explore new opportunities.',
                'icon' => 'images/notifications/notification-icon.png',
                'type' => 'jobs',
                'action' => 'jobs_category/2',
                'is_sent' => true,
                'is_read' => (bool) rand(0, 1),
                'user_id' => 1,
            ],
            [
                'title' => 'Notification Preferences',
                'body' => 'Manage your notification preferences on the notification page.',
                'icon' => 'images/notifications/notification-icon.png',
                'type' => 'account',
                'action' => 'notification_page/projects',
                'is_sent' => false,
                'is_read' => (bool) rand(0, 1),
                'user_id' => 1,
            ],
            // ... (Keep adding more notifications as needed)
            [
                'title' => 'New Job Opportunity',
                'body' => 'An exciting job opportunity has come up. Don\'t miss out!',
                'icon' => 'images/notifications/notification-icon.png',
                'type' => 'jobs',
                'action' => 'jobs/delivery/1',
                'is_sent' => true,
                'is_read' => (bool) rand(0, 1),
                'user_id' => 1,
            ],
            
        ];
    
        DB::table('push_notifications')->insert($notifications);
         
    
    }
}

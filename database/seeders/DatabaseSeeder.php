<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ApplicationModulesSeeder::class,
            CompanySeeder::class,
            PermissionSeeder::class,
            JobCategorySeeder::class,
            SkillSeeder::class, 
            DocumentType::class,
            TutorialsSeeder::class,
            ApplicationStatusListSeeder::class,
            AppUserSeeder::class,
            UserWalletSeeder::class,
            ProjectCategoriesSeeder::class,
            ProjectSubCategorySeeder::class,
            FaqSeeder::class,
            AppUserDocumentsSeeder::class,
            ProjectsSeeder::class,
            JobSeeder::class,
            ProjectStepsSeeder::class,
            TutorialsSeeder::class,
            WalletTransactionSeeder::class,
            WebinarSeeder::class,
            app_assets_seeder::class,
            OtherJobBenefitsSeeder::class,
            KamaaoBenefitsSeeder::class,
            requirements_in_jobs::class,
            BannersSeeder::class,
            JobsQuestionSeeder::class,
            postJobMigrationUpdateSeeder::class,
            JobsDoDontsSeeder::class,
            AppReferralsSeeder::class,
            jobLeadsSeeder::class,
            PushNotificationsSeeder::class,
            JobsSubQuestionsSeeder::class,
            JobLeadStatusSeeder::class,
            UserJobsLeadStatusSeeder::class,
            ProjectDoDontSeeder::class,
            ProjectShareBannersSeeder::class,
            ProjectBenefitsSeeder::class,
            TeamSeeder::class,
            TeamMembersSeeder::class,
            ProjectLeadsSeeder::class,
            AppReferralSettingsSeeder::class,
            CourseSeeder::class,
            TutorialsSeederForCourse::class,
        ]);
    }
}

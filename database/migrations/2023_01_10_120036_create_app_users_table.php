<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique();
            $table->string('alternet_phone')->nullable();
            $table->integer('otp')->nullable();
            $table->timestamp('otp_created_at')->nullable();
            $table->timestamp('otp_verified_at')->nullable();
            $table->boolean('otp_verified')->default(0)->comment('0 not verified, 1 verified');
            $table->string('app_language')->default('en')->comment('en- english, hi- hindi , bn- bangoli....');
            $table->string('profile_pic')->nullable();
            $table->string('location')->nullable();
            $table->string('place_id')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('job_preferance_category')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('education')->nullable();
            $table->string('assets')->nullable();
            $table->string('payment_contact_id')->nullable();
            $table->string('razor_fa_id')->nullable();
            $table->string('razor_fa_id_upi')->nullable();
            $table->boolean('registration_completed')->default(0);
            $table->boolean('app_notification')->default(0);
            $table->boolean('whatsapp_notification')->default(0);
            $table->boolean('submitted_kyc')->default(0);
            $table->boolean('completed_kyc')->default(0);
            $table->integer('added_categories')->default(30);
            $table->integer('added_skills')->default(100);
            $table->integer('added_locations')->default(40);
            $table->integer('added_experience')->default(80);
            $table->integer('added_education')->default(70);
            $table->integer('added_assets')->default(65);
            $table->integer('added_documents')->default(10);
            $table->string('fcm_token')->nullable();
            $table->decimal('earned_stars',  3, 1)->nullable();
            $table->integer('team_id')->index()->nullable();
            $table->integer('upi_verified')->default(0)->comment("0 no, 1 Yes");
            $table->string('referral_code')->nullable()->comment("referral code associated to user, used to share jobs, app, task");
            $table->integer('status')->default(1)->comment("0 is disabled|blocked user, 1 is active");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_users');
    }
};

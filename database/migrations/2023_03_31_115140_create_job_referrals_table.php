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
        Schema::create('job_referrals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('app_users')->onDelete('cascade');
            $table->bigInteger('referred_user_id')->unsigned()->index()->nullable();
            $table->foreign('referred_user_id')->references('id')->on('app_users')->onDelete('cascade');
            // $table->bigInteger('job_id')->unsigned()->index();
            // $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->string('referral_code');
            $table->string('status')->default('pending')->comment('Values such as pending, applied, hired, rejected, etc.');
            $table->timestamps();
            $table->unique(['user_id', 'referred_user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_referrals');
    }
};

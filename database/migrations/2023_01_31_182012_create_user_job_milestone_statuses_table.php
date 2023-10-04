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
        Schema::create('user_job_milestone_status', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('app_users')->onDelete('cascade');
            $table->bigInteger('job_id')->unsigned()->index();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->bigInteger('milestone_id')->unsigned()->index();
            $table->foreign('milestone_id')->references('id')->on('kamaao_benefits')->onDelete('cascade');
            $table->string('isRewarded');
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
        Schema::dropIfExists('user_job_milestone_status');
    }
};

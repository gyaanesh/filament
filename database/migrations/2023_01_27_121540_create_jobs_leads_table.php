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
        Schema::create('jobs_leads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lead_for_user')->unsigned()->index();
            $table->foreign('lead_for_user')->references('id')->on('app_users')->onDelete('cascade');
            $table->bigInteger('shared_with')->unsigned()->index()->nullable();
            $table->foreign('shared_with')->references('id')->on('app_users')->onDelete('cascade');
            $table->string('phone');
            $table->string('name');
            $table->bigInteger('job_id')->unsigned()->index();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->string('status')->default(1);
            $table->string('message')->nullable();
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
        Schema::dropIfExists('jobs_leads');
    }
};

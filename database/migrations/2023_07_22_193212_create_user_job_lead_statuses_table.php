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
        Schema::create('user_job_lead_status', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lead_id')->unsigned()->index()->nullable();
            $table->foreign('lead_id')->references('id')->on('jobs_leads')->onDelete('cascade');
            $table->integer('status');
            
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
        Schema::dropIfExists('user_job_lead_status');
    }
};

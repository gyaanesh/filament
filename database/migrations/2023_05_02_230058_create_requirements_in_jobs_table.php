job<?php

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
        Schema::create('requirements_in_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('requirement');
            $table->integer('requirement_id');
            $table->string('type')->comment('TYPE: Assets, Skills, Other');
            $table->bigInteger('job_id')->unsigned()->index();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
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
        Schema::dropIfExists('requirements_in_jobs');
    }
};

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
        Schema::create('user_application_answers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('job_id')->unsigned()->index()->nullable();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');

            $table->bigInteger('question_id')->unsigned()->index()->nullable();
            $table->foreign('question_id')->references('id')->on('jobs_questions')->onDelete('cascade');

            $table->bigInteger('applicaton_id')->unsigned()->index()->nullable();
            $table->foreign('applicaton_id')->references('id')->on('job_applications')->onDelete('cascade');
            
            $table->string("user_answer");
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
        Schema::dropIfExists('user_application_answers');
    }
};

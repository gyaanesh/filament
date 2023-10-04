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
        Schema::create('tutorials', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('video_type', ['tutorial', 'kamaao', 'course'])->default('tutorial');
            $table->bigInteger('course_id')->unsigned()->index()->nullable();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->string('banner');
            $table->string("duration");
            $table->string("url");
            $table->integer("job_id")->nullable();
            $table->integer("project_id")->nullable();
            $table->boolean("status");
            $table->string("number_of_likes")->default(0);
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
        Schema::dropIfExists('tutorials');
    }
};

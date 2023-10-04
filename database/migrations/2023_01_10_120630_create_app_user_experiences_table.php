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
        Schema::create('app_user_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('company');
            $table->string('job_title');
            $table->string('salary');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('currently_working_here')->default(0);
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('app_users')->onDelete('cascade');
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
        Schema::dropIfExists('app_user_experiences');
    }
};

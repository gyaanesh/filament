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
        Schema::create('comments_in_tutorials', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->string('user_id');
            $table->bigInteger('tutorial_id')->unsigned()->index();
            $table->foreign('tutorial_id')->references('id')->on('tutorials')->onDelete('cascade');
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
        Schema::dropIfExists('comments_in_tutorials');
    }
};

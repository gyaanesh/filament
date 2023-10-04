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
        Schema::create('project_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('sub_category');
            $table->bigInteger('category_id')->unsigned()->index()->nullable();
            $table->foreign('category_id')->references('id')->on('project_categories')->onDelete('cascade');
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
        Schema::dropIfExists('project_sub_categories');
    }
};

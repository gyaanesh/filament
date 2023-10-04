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
       
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('team_name')->nullable();
            $table->integer('coins_earned')->default(0);
            $table->integer('amount_earned')->default(0);
            $table->bigInteger('team_owner')->unsigned()->index();
            $table->foreign('team_owner')->references('id')->on('app_users')->onDelete('cascade'); 
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
        Schema::dropIfExists('teams');
    }
};

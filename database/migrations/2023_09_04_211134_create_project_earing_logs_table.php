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
        Schema::create('project_earing_logs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lead_id')->unsigned()->index();
            $table->foreign('lead_id')->references('id')->on('project_leads')->onDelete('cascade');
            $table->bigInteger('team_id')->unsigned()->nullable();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->integer('user_id'); 
            $table->enum('user_type', ['app_users', 'team_members']);
            $table->text('description')->nullable();
            $table->integer('earning_amount');
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
        Schema::dropIfExists('project_earing_logs');
    }
};

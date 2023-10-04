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
        Schema::create('project_leads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lead_for_user')->unsigned()->index();
            $table->foreign('lead_for_user')->references('id')->on('app_users')->onDelete('cascade');
            $table->bigInteger('project_id')->unsigned()->index();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('pincode');
            $table->boolean('isRewarded')->default(false);
            $table->boolean('isRejected')->default(false);
            $table->boolean('isExpired')->default(false);
            $table->text('notes')->default('Lead is added and status will be updated within 15 days. If no update is received then proceed to raise a dispute. ');
            $table->integer('status')->default(1);
            $table->enum('added_by', ['app_users', 'team_members'])->default('app_users');
            $table->bigInteger('member_id')->unsigned()->index()->nullable();
            $table->foreign('member_id')->references('id')->on('team_members')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('project_leads');
    }
};

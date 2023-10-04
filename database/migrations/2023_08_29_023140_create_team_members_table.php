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
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('role')->default('member');
            $table->bigInteger('team_id')->unsigned()->index();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade'); 
           
            $table->integer('coins_earned')->default(0);
            $table->integer('amount_earned')->default(0);
            $table->string('profile_image')->default('assets/global_assets/images/app/avatar-male.png');

            $table->integer('otp')->nullable();
            $table->timestamp('otp_created_at')->nullable();
            $table->timestamp('otp_verified_at')->nullable();
            $table->boolean('otp_verified')->default(0)->comment('0 not verified, 1 verified');
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
        Schema::dropIfExists('team_members');
    }
};

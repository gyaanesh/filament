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
        Schema::create('app_referrals', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('app_users')->onDelete('cascade');
            $table->bigInteger('referred_user_id')->unsigned()->index();
            $table->foreign('referred_user_id')->references('id')->on('app_users')->onDelete('cascade');
            $table->integer('status')->default(1)->comment('possible values 1,2 and 3');
            $table->integer('amountRs')->default(100)->nullable();
            $table->integer('coins')->nullable();
            $table->boolean('isRewarded');
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
        Schema::dropIfExists('app_referrals');
    }
};

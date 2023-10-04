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
        Schema::create('user_wallets', function (Blueprint $table) {
            $table->id();
            $table->integer('coins')->default(0);
            $table->bigInteger('user_id')->unsigned()->index()->unique();
            $table->foreign('user_id')->references('id')->on('app_users')->onDelete('cascade');
            $table->integer('amountRs')->default(0);
            $table->integer('coinsEarnedEver')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * 
     */

    public function down()
    {
        Schema::dropIfExists('user_wallets');
    }
};

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
        Schema::create('wallet_transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('app_users')->onDelete('cascade');
            $table->bigInteger('wallet_id')->unsigned()->index();
            $table->foreign('wallet_id')->references('id')->on('user_wallets')->onDelete('cascade');
            $table->string('title');
            $table->string('entity_id')->unique()->nullable();
            $table->string('entity')->nullable()->comment('payout');
            $table->string('fund_account_id')->nullable();
            $table->integer('amount');
            $table->string('fees')->nullable();
            $table->string('tax')->nullable();
            $table->string('status')->nullable();
            $table->string('utr')->nullable()->comment('Universal Transaction Reference This number will be used for identifying the transactions and will be visible in your bank account statement');
            $table->string('reference_id')->unique()->nullable();
            $table->string('failure_reason')->nullable();
            $table->string('status_details_id')->nullable();
            $table->string('status_details_reason')->nullable();
            $table->string('status_details_description')->nullable();
            $table->string('status_details_source')->nullable();
            $table->string('merchant_id')->nullable();
            $table->string('error_source')->nullable();
            $table->string('error_reason')->nullable();
            $table->string('error_description')->nullable();
            $table->string('error_code')->nullable();
            $table->string('error_step')->nullable();
            $table->text('error_metadata')->nullable();
            $table->string('trn_type')->comment("Cr | DR | CRC (Credited By Coin Redeem), CE (Coin Earned)");
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
        Schema::dropIfExists('wallet_transactions');
    }
};

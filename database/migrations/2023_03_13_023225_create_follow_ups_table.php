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
        Schema::create('follow_ups', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lead_id')->unsigned()->index();
            $table->foreign('lead_id')->references('id')->on('leads')->onDelete('cascade');
            $table->text("feedback")->nullable();
            $table->string("action");
            $table->dateTime("scheduled_on");
            $table->tinyInteger("status")->default(1)->comment("0 is closed, 1 is active, 2 is in follow ups");
            $table->bigInteger('assigned_to')->unsigned()->index()->nullable()->comment("agent who is responsible to handle");
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('follow_ups');
    }
};

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
        // OFFLINE LEADS
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("phone");
            $table->string("source");
            $table->text("feedback")->nullable();
            $table->string("action");
            $table->integer('age')->nullable();
            $table->string('profession')->nullable();
            $table->string('income')->nullable();
            $table->dateTime('meeting_date')->nullable();
            $table->text('meeting_address')->nullable();
            $table->tinyInteger("status")->default(1)->comment("0 is closed, 1 is active, 2 is in follow ups");

            $table->bigInteger('assigned_to')->unsigned()->index()->nullable()->comment("agent who is responsible to handle");
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('assignedToClose')->unsigned()->index()->nullable()->comment(" if forwarded to close then the id of the staff who will close this");
            $table->foreign('assignedToClose')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('closing_date')->nullable();
            $table->bigInteger('assigned_by')->unsigned()->index()->nullable()->comment("admin || Team Leader who Created This Record");
            $table->foreign('assigned_by')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('uploaded_by')->unsigned()->index()->comment("admin || Team Leader who Created This Record");
            $table->foreign('uploaded_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('leads');
    }
};

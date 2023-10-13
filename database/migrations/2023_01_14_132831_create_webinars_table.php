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
        Schema::create('webinars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('banner')->comment("url for the banner uploaded to our system");
            $table->dateTime('schedule_date_time');
            $table->string('for')->comment('values - job, project, task');
            $table->bigInteger('reference_id')->comment('value id of - job, project, task');
            $table->string('url')->comment("host URL");
            $table->string('total_slots');
            $table->string('available_slots');
            $table->string('completed')->default(0)->comment("values , 0 is upcoming 1 is completed");
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
        Schema::dropIfExists('webinars');
    }
};

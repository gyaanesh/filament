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
        Schema::create('kamaao_benefits', function (Blueprint $table) {
            $table->id();
            $table->string('step_title');
            $table->string('description');
            $table->string('reward')->comment('number of coins');
            $table->string('referance_table')->comment('job or project');
            $table->string('referance_id');
            $table->string('complete_in_days');
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
        Schema::dropIfExists('kamaao_benefits');
    }
};

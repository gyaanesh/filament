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
        Schema::create('project_lead_claims', function (Blueprint $table) {
            
            $table->id();
            $table->bigInteger('lead_id')->unsigned()->index();
            $table->foreign('lead_id')->references('id')->on('project_leads')->onDelete('cascade');
            $table->text('comment');
            $table->boolean('is_open')->default(true);
            $table->boolean('is_viewed')->default(false);
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
        Schema::dropIfExists('project_lead_claims');
    }
};

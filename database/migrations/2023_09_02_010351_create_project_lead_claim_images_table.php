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
        Schema::create('project_lead_claim_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lead_id')->unsigned()->index();
            $table->foreign('lead_id')->references('id')->on('project_leads')->onDelete('cascade');
            $table->bigInteger('claim_id')->unsigned()->index();
            $table->foreign('claim_id')->references('id')->on('project_lead_claims')->onDelete('cascade');
            $table->string('image');
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
        Schema::dropIfExists('project_lead_claim_images');
    }
};

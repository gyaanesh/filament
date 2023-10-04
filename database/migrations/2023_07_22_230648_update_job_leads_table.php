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
        Schema::table('jobs_leads', function (Blueprint $table) {
            // Add the new boolean columns
            $table->boolean('isRewarded')->default(false);
            $table->boolean('isRejected')->default(false);
            $table->boolean('isExpired')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs_leads', function (Blueprint $table) {
            // Drop the added columns if you ever need to rollback
            $table->dropColumn('isRewarded');
            $table->dropColumn('isRejected');
            $table->dropColumn('isExpired');
        });
    }
};

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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('legal_name');
            $table->string('popular_name');
            $table->string('url');
            $table->string('logo');
            $table->text('about');
            $table->text('address');
            $table->string('lattitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('contact_main');
            $table->enum('company_type', ['Kamaao', 'Other'])->default('Kamaao');
            $table->integer('status')->default(1)->comment("0 is disabled , 1 is active");
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
        Schema::dropIfExists('companies');
    }
};

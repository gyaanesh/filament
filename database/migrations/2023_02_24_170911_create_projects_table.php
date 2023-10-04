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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->unsigned()->index();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->string('title'); 
            $table->text('description'); 
            $table->string('type')->comment('not yet decieded');
            $table->bigInteger('category')->unsigned()->index();
            $table->foreign('category')->references('id')->on('project_categories')->onDelete('cascade');
            $table->integer('amount'); 
            $table->bigInteger('subcategory')->unsigned()->index();
            $table->foreign('subcategory')->references('id')->on('project_sub_categories')->onDelete('cascade');
            $table->integer('coins');
            $table->boolean('is_trending')->default(false);
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('is_expired')->default(false)->comment("0 is NO, 1 YES");
            $table->integer('total_openings');
            $table->integer('opening_left')->nullable();
            $table->boolean('is_enabled')->default(true)->comment("0 is disabled, 1 is active");
            $table->integer('like_count')->default(0);
            $table->integer('number_of_applications')->default(0);
            $table->text('about')->nullable();
            $table->string('cta')->nullable();
            $table->string('cta2');
            $table->boolean('tag_kamaao')->nullable();
            $table->boolean('has_kamaao_benefits')->nullable()->comment("only if tag_kamaao is 1, values 0 or 1")->default(0);
            $table->boolean('has_a_webinar')->nullable()->comment('values 0 or 1.');
            $table->integer('webinar_id')->nullable()->comment('values 0 or 1.');
            $table->boolean('has_an_upcoming_webinar')->nullable()->comment('values 0 or 1.');
            $table->boolean('has_tutorials')->nullable()->comment('0 no 1 is yes');
            $table->string('tutorials_id')->nullable();
            $table->text('referral_text')->nullable();

            $table->integer('posted_by_id');
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
        Schema::dropIfExists('projects');
    }
};

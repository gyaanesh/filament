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
        Schema::create('jobs_sub_questions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('question_id')->unsigned()->index()->nullable();
            $table->foreign('question_id')->references('id')->on('jobs_questions')->onDelete('cascade');
            $table->string('subquestion');
            $table->string('answer')->default("yes");
        $table->json('options')->default(json_encode(['Yes', 'No']));
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
        Schema::dropIfExists('jobs_sub_questions');
    }
};

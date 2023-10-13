<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type')->comment('eg. partTime,fulltime, contract, work_from_home');
            $table->string('category');
            $table->date('last_date_to_apply')->nullable();
            $table->integer('is_expired')->default(0)->comment("0 is NO, 1 YES");
            $table->string('total_openings');
            $table->integer('opening_left')->nullable();
            $table->string('min_salary');
            $table->string('max_salary');
            $table->text('notes');
            $table->bigInteger('company_id')->unsigned()->index();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->string('job_address')->comment('address of the job location not company');
            $table->string('job_Latitude')->nullable();
            $table->string('job_Longitude')->nullable();
            $table->string('education_required');
            $table->boolean('fresher_can_apply')->comment("in months, 1 year 2 month will be 14 months");
            $table->integer('experience_required')->nullable()->comment("in months, 1 year 2 month will be 14 months");
            $table->string('working_days')->comment("monday-friday, monday-saturday, ");
            $table->string('working_shift')->comment("Day Shift, Night Shift, ");
            $table->string('shift_timing')->comment("eg: shift_start + Shift_ends 09:00 AM - 05:00 PM ");
            $table->boolean('tag_kamaao')->nullable();
            $table->boolean('kamaao_benefits')->nullable()->comment("only if tag_kamaao is 1, values 0 or 1")->default(0);
            $table->boolean('tag_premium')->nullable();
            $table->boolean('tag_verified')->nullable();
            $table->integer('is_enabled')->default(1)->comment("0 is disabled, 1 is active");
            $table->integer('like_count')->default(0);
            $table->integer('number_of_applications')->default(0);
            $table->text('job_summery');
            $table->string('english_level');
            $table->string('has_a_webinar')->default(0)->comment('values 0 or 1.');
            $table->string('has_an_upcoming_webinar')->default(0)->comment('values 0 or 1.');
            $table->string('upcoming_webinar_id')->nullable()->comment('values null or webinar_id.');;
            $table->integer('joining_fee_required');
            $table->string('joining_fee')->nullable();
            $table->string('joining_fee_for')->nullable();
            $table->string('has_tutorials')->default(0)->comment('0 no 1 is yes');
            $table->bigInteger('tutorial_id')->unsigned()->index()->nullable();
            $table->foreign('tutorial_id')->references('id')->on('tutorials')->onDelete('cascade');
            $table->string('interview_method');
            $table->string('interview_Address')->nullable();
            $table->integer('share_count')->default(0);
            $table->integer('posted_by_id');
            $table->text('about_job');
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
        Schema::dropIfExists('jobs');
    }
};

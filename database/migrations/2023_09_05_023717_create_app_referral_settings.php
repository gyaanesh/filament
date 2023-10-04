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
        Schema::create('app_referral_settings', function (Blueprint $table) {
            $table->id();
            $table->enum('referral_type', ['app', 'job', 'project']);
            $table->integer('referral_amount')->default(0);
            $table->integer('referral_coins')->default(0);
            $table->boolean("status"); // Ensure only one active row
            $table->timestamps();
        });
        DB::unprepared('
            CREATE TRIGGER before_insert_app_referral_settings
            BEFORE INSERT ON app_referral_settings
            FOR EACH ROW
            BEGIN
                DECLARE existing_active INT;

                SELECT COUNT(*) INTO existing_active
                FROM app_referral_settings
                WHERE referral_type = NEW.referral_type AND status = 1;

                IF NEW.status = 1 AND existing_active > 0 THEN
                    SIGNAL SQLSTATE "45000"
                        SET MESSAGE_TEXT = "An active referral setting for this type already exists";
                END IF;
            END;
        ');
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('app_referral_settings');

        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_app_referral_settings');
    }
};

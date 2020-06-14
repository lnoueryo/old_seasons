<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name');
            $table->string('kana_family_name');
            $table->string('kana_first_name');
            $table->integer('phone_number');
            $table->string('gender');
            $table->integer('birth_year');
            $table->integer('birth_month');
            $table->integer('birth_day');
            $table->string('mail_magazine');
            $table->integer('booking_counter')->default(0);
            $table->integer('latest_booking_date')->nullable();
            $table->integer('last_booking_date')->nullable();
            $table->integer('latest_booking_plan')->nullable();
            $table->integer('last_booking_plan')->nullable();
            $table->integer('memo')->nullable();
            $table->integer('admin')->nullable();
            $table->boolean('token_activation')->default(false);
            $table->string('isVerified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumns('first_name','kana_family_name','kana_first_name','phone_number','gender','birth_year','birth_month','birth_day','mail_magazine','booking_counter','latest_booking_date','last_booking_date','latest_booking_plan','last_booking_plan','memo','admin','token_activation','isVerified');
        });
    }
}

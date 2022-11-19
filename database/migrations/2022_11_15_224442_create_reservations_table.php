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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_time');
            $table->char('reservation_status');
            $table->unsignedBigInteger('user_Id');
            $table->unsignedBigInteger('sports_facility_Id');


            $table->foreign('user_Id')->references('id')->on('users');
            $table->foreign('sports_facility_Id')->references('id')->on('sport_facilities');
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
        Schema::dropIfExists('reservations');
    }
};

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
        Schema::create('sport_facilities', function (Blueprint $table) {
            $table->id();
            $table->char('roof');
            $table->float('price');
            $table->float('length');
            $table->float('width');
            $table->unsignedBigInteger('sports_field_Id');

            $table->foreign('sports_field_Id')->references('id')->on('sport_fields');
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
        Schema::dropIfExists('sport_facilities');
    }
};

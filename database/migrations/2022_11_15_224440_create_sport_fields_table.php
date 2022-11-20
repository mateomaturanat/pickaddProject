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
        Schema::create('sport_fields', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('cellphone');
            $table->float('hour_price');
            $table->char('court_type');
            $table->string('horary');
            $table->char('week');
            $table->char('type');
            $table->char('amount');
            $table->string('trafo');
            $table->text('description');
            $table->string('image_url');
            $table->string('lat');
            $table->string('long');
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
        Schema::dropIfExists('sport_fields');
    }
};

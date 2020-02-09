<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('pickup_date');
            $table->dateTime('returned_date');
            $table->dateTime('pickup_location');
            $table->dateTime('returned_location');
            $table->bigInteger('user_id');
            $table->bigInteger('vehicle_id');
            // $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->boolean('is_validate');
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
}

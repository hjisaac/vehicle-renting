<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('matriculation')->unique();
            $table->String('brand')->default('TOYOTA');
            $table->String('model')->default('Mini');
            $table->bigInteger('numberPlace')->default('2');
            $table->bigInteger('numberLuggage')->default('2');
            $table->double('price',8,2)->default(30000);
            $table->String('image')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}

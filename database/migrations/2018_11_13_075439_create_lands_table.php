<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->increments('land_id');
            $table->string('land_name');
            $table->string('land_address');
            $table->string('land_latitide');
            $table->string('land_longitude');
            $table->unsignedinteger('land_province_id');
            $table->unsignedinteger('land_district_id');
            $table->unsignedinteger('land_city_id');
            $table->string('land_city');
            $table->float('land_area',8,2);
            $table->timestamps();

            $table->foreign('land_province_id')->references('province_id')->on('provinces');
            $table->foreign('land_district_id')->references('district_id')->on('districts');
            $table->foreign('land_city_id')->references('city_id')->on('cities');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lands');
    }
}

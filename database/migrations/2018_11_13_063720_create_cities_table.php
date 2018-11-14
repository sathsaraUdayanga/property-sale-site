<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('city_id');
            $table->string('city_name_en');
            $table->string('city_name_si');
            $table->string('city_name_ta')->nullable();
            $table->string('city_postcode')->nullable();
            $table->string('city_latitide')->nullable();
            $table->string('city_longitude')->nullable();

            $table->unsignedinteger('city_province_id');
            $table->unsignedinteger('city_district_id');

            $table->timestamps();

            $table->foreign('city_province_id')->references('province_id')->on('provinces');
            $table->foreign('city_district_id')->references('district_id')->on('districts');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}

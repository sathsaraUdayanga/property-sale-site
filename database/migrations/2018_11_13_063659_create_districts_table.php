<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->increments('district_id');
            $table->string('district_name_en');
            $table->string('district_name_si');
            $table->string('district_name_ta');
            $table->unsignedinteger('district_province_id');

            $table->timestamps();

            $table->foreign('district_province_id')->references('province_id')->on('provinces');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
}

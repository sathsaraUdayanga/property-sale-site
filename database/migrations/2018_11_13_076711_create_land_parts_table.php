<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land_parts', function (Blueprint $table) {
            $table->increments('land_parts_id');
            $table->float('land_parts_area',8,2);
            $table->float('land_parts_price',8,2);
            $table->boolean('land_parts_status')->default(true);
            $table->unsignedinteger('land_parts_land_id');

            $table->timestamps();

            $table->foreign('land_parts_land_id')->references('land_id')->on('lands');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('land_parts');
    }
}

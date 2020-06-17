<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrimesterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trimester', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number');
            $table->date('date_start');
            $table->date('date_end');
            $table->unsignedBigInteger('offer_id');
            $table->foreign('offer_id')->references('id')->on('offer');
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
        Schema::dropIfExists('trimester');
    }
}

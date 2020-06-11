<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('name');
            $table->string('type_career');
            $table->text('description');
            $table->text('title_get');
            $table->text('level_education');
            $table->text('duration');
            $table->text('working_day');
            $table->boolean('state');
            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')->references('id')->on('admin');
            $table->unsignedBigInteger('center_id');
            $table->foreign('center_id')->references('id')->on('center');
            $table->unsignedBigInteger('level_formation_id');
            $table->foreign('level_formation_id')->references('id')->on('level_formation');
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
        Schema::dropIfExists('program');
    }
}

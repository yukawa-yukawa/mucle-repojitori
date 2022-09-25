<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muscles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sex_id');
            $table->integer('objective_id');
            $table->integer('part_id');
            $table->integer('equipment_id');
            $table->bigInteger('name_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('name_id')
            ->references('id')->on('names')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('muscles');
    }
}

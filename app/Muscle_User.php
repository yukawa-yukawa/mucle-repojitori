<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class muscle_user extends Model
{
    //
    public function up()
    {
        Schema::create('muscle_user', function (Blueprint $table) {
            $table->integer('muscle_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->primary(['muscle_id','user_id']);
        });
    }
}

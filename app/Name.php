<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    public function muscles()
    {
        return $this->hasMany('App\Muscle'); 
    }
}

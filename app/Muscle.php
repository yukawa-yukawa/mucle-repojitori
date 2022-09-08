<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class muscle extends Model
{
    //
    public function user()
    {
        return $this->belongsToMany('app\User');
    }
}

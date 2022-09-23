<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class muscle extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany('app\User');
    }
    
    public function name()
    {
        return $this->belongsTo('App\Name');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class muscle extends Model
{
    public function name()
    {
        return $this->belongsTo('App\Name');
    }
}

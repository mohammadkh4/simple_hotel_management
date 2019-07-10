<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    //
    public function hotels() {
        return $this->hasMany('App\Hotel') ;
    }
}

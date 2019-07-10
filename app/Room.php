<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    public function hotel() {
        return $this->belongsTo('App\Hotel') ;
    }
    public function roomtype() {
        return $this->belongsTo('App\RoomType') ;
    }

    public function reservations() {
        return $this->hasMany('App\Reservation') ;
    }

}

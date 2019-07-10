<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //

    protected $fillable = ['id','name','manager_id','city_id','stars'] ;
    public function manager() {
        return $this->belongsTo('App\Manager') ;
    }

    public function city() {
        return $this->belongsTo('App\City') ;
    }

    public function rooms() {
        return $this->hasMany('App\Room') ;
    }
    public function reservations() {
        return $this->hasMany('App\Reservation') ;
    }
}

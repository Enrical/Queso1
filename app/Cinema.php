<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    public function movies()
    {
       return $this->belongsToMany('App\Movie', 'cinema_events', 'cinema_id', 'movie_id');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }
}

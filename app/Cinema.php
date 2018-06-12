<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    public function movies()
    {
        $this->belongsToMany('\App\Movie', 'cinema_events', 'cinema_id', 'movie_id');
    }

    public function ctiy ()
    {
        return $this->belongsTo('App\City');
    }
}

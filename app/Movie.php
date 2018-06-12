<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function cinemas()
    {
       return $this->belongsToMany('App\Cinema', 'ciname_events', 'movie_id', 'cinema_id');
    }
}

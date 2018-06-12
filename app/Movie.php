<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function cinemas()
    {
        $this->belongsToMany('App\Cinema', 'cinema_events', 'movie_id', 'cinema_id');
    }
}

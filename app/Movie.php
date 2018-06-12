<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function cinemas()
    {
<<<<<<< HEAD
       return $this->belongsToMany('App\Cinema', 'ciname_events', 'movie_id', 'cinema_id');
=======
        $this->belongsToMany('App\Cinema', 'cinema_events', 'movie_id', 'cinema_id');
>>>>>>> 7a6d2360fc1e31508e45d7e1c5248ada78f9b13d
    }
}

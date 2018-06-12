<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    public function movies()
    {
<<<<<<< HEAD
       return $this->belongsToMany('App\Movie', 'cinema_events', 'cinema_id', 'movie_id');
    }

    public function city()
=======
        $this->belongsToMany('\App\Movie', 'cinema_events', 'cinema_id', 'movie_id');
    }

    public function ctiy ()
>>>>>>> 7a6d2360fc1e31508e45d7e1c5248ada78f9b13d
    {
        return $this->belongsTo('App\City');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CinemaEvent extends Model
{
    public function movie()
    {
<<<<<<< HEAD
        return $this->belongsTo('App\Movie');
    }
    
=======
        $this->belongsTo('App\Movie');
    }

>>>>>>> 7a6d2360fc1e31508e45d7e1c5248ada78f9b13d
    public function cinema()
    {
        return $this->belongsTo('App\Cinema');
    }
}

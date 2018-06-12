<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CinemaEvent extends Model
{
    public function movie()
    {
        $this->belongsTo('App\Movie');
    }

    public function cinema()
    {
        return $this->belongsTo('App\Cinema');
    }
}

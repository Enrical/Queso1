<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\CinemaEvent;
use App\City;
use App\Cinema;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::limit(10)
            ->orderBy('title')
            ->get();

        $prague = City::where('name', 'Praha')
            ->first();

        $events = CinemaEvent::where('begins_at', '2018-06-12 20:00:00')
            ->leftJoin('cinemas', 'cinema_events.cinema_id', '=', 'cinema.id')
            ->where('cinema.city_id', $prague->id)
            ->get();

        $cinema = Cinema::find(98);

        $all_movies_in_this_cinema = $cinema->movies;

        $movies_played_today = $cinema->movies()
            ->where('cinema_events');

        // select Cinema Event with id = 1
        $event = CinemaEvent::find(1);

        $movie_being_played = $event->movie;
        $where_it_is_played = $event->cinema;
        $where_cinema_is = $event->cinema->city->name;

        dd($where_it_is_played);

        dd ( $cinema->movies );
        
        $view = view('movies/index');
        $view->movies = $movies;
        $view->event = $events;

        return $view;
    }
}

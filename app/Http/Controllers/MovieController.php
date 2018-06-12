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
        $movies = Movie::limit(10)->orderBy('title')->get();

        $prague = City::where('name', 'Praha')->first();
        // dd($prague);

        $events = CinemaEvent::where('begins_at', '2018-06-12 20:00:00')
            ->leftJoin('cinemas', 'cinema_events.cinema_id', '=', 'cinemas.id')
            ->where('cinemas.city_id', $prague->id)
            ->get();        

        $cinema = Cinema::find(98);

        $all_movies_in_this_cinema = $cinema->movies;

        $movies_played_today = $cinema->movies()
        ->where('cinema_events.begins_at', '>', '2018-06-12 00:00:00')
        ->where('cinema_events.begins_at', '<', '2018-06-13 00:00:00')
        // ->groupBY('cinema_events.moive_id') //select every movie just once
        ->get();

        // Select CinemaEvent with id = 1
        $event = CinemaEvent::find(1);

        $movie_begins_played = $event->movie;
        $where_is_it_being_played = $event->cinema;

        $city_where_the_cinema_is = $event->cinema->city->name;

        dd ($where_is_it_being_played);



        // return $events; display the info of the database
        $view = view('movies/index');
        $view->movies = $movies;
        $view->events = $events;
        $view->movies_played_today = $movies_played_today;
        

        return $view;
    }
}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/questions', 'QuestionController@index');

Route::get('/questions/{id}', 'QuestionController@show')->name('show question');

<<< HEAD
Route::get('/movies', 'MovieController@index');
=======
// list of categories
Route::get('/categories', 'CategoryController@index');
>>>>>>> c3431b665af42680732d2f401d2fae2560b724cd

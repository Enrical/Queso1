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

Route::get('/questions/create', 'QuestionController@create');

Route::post('/questions', 'QuestionController@store');

Route::get('/questions/{id}', 'QuestionController@show')->name('show question'); //->where('id', '\d+')

// list of categories
Route::get('/categories', 'CategoryController@index');

Route::get('/movies', 'MovieController@index');

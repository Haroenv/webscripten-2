<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', function () {
  $events = DB::select('SELECT * from concerts ORDER BY start_date');
  return view('main',['search' => '','events' => $events]);
}]);

Route::post('search/', function(){
  return redirect()->route('search',$_POST['q']);
});

Route::get('search/{query}', ['as' => 'search', function($query){
  $events = DB::select('SELECT * FROM concerts WHERE title LIKE :search ORDER BY start_date', ['search' => '%'.$query.'%']);
  return view('main',['search' => $query,'events' => $events]);
}]);

Route::get('switch/{id}', ['as' => 'switch', function($id){
  DB::update('UPDATE concerts SET fav = (1 - fav) WHERE id = :id', ['id' => $id]);
  return redirect()->route('home');
}]);

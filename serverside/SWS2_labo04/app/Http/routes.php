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

/**
 * admin
 */

Route::group(['as' => 'admin::'], function () {
    Route::get('admin/', ['as' => 'dashboard', 'uses' => 'AdminController@dashboard']);
    Route::get('admin/add', ['as' => 'add', 'uses' => 'AdminController@add']);
    Route::get('admin/delete/{id}', ['as' => 'delete', 'uses' => 'AdminController@delete']);
});

/**
 * add one
 */
Route::post('/blog/add', function(request $request){

});

/**
 * authorize
 */
Route::get('/auth', function(){

});

/**
 * Display all blogposts
 */

Route::get('/', function(){
    return redirect(URL::to('/blog'));
});

Route::get('/blog', 'BlogController@overview');

/**
 * one blogpost
 */
Route::get('/blogposts/{id}', 'BlogController@detail')->where('id', '[0-9]+');

/**
 * comments on blogpost
 */
Route::get('/blogposts/{id}/comments', 'BlogController@comments')->where('id', '[0-9]+');

/**
 * all authors
 */

Route::get('/authors', 'AuthorController@overview');
/**
 * one authors
 */

Route::get('/authors/{id}', 'AuthorController@detail')->where('id', '[0-9]+');

/**
 * all blogposts of one author
 */
Route::get('/authors/{id}/blogposts', 'AuthorController@blogposts')->where('id', '[0-9]+');

Route::auth();

Route::get('/home', 'HomeController@index');

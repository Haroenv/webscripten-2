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
 * search for the thingies
 */
Route::get('/search','BlogController@search');

/**
 * all authors
 */
Route::get('/authors', 'AuthorController@overview');

/**
 * one author
 */
Route::get('/authors/{id}', 'AuthorController@detail')->where('id', '[0-9]+');

/**
 * all blogposts of one author
 */
Route::get('/authors/{id}/blogposts', 'AuthorController@blogposts')->where('id', '[0-9]+');


Route::group(['middleware' => 'auth'], function () {
    /**
     * admin
     */

    Route::get('/admin', 'AdminController@overview');

    /**
     * add one
     */
    Route::get('/admin/add', 'AdminController@add');
    Route::post('/admin/add', 'AdminController@store');

    /**
     * delete one
     */
    Route::delete('/admin/delete/{id}', 'AdminController@delete');

    /**
     * edit one
     */
    Route::get('/admin/edit/{id}', 'AdminController@edit');
    Route::post('/admin/edit/{id}', 'AdminController@update');

});

Route::auth();

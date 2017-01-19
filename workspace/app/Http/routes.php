<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    
    Route::get('/library','libraryController@index');
    Route::post('/library/store','libraryController@store');

    Route::resource('/library','libraryController');

    Route::resource('/book','bookController');
    Route::get('/addBook','bookController@index');
    Route::post('/addBook/store','bookController@store');
    Route::get('/Search','searchController@index');

    Route::get('/adminPage','adminPageController@index');
    Route::get('/editLibrary','editLibraryController@index');
    Route::get('/editBook','editBookController@index');

    Route::get('/memberships','membershipsController@index');
    //Route::resource('/memberships','membershipsController');

    Route::post('/memberships/store','membershipsController@store');
    Route::post('/memberships/accept','membershipsController@accept');
    Route::resource('/memberships','membershipsController');
    Route::post('/memberships/remove','membershipsController@remove');
    
    //Route::get('/memberships/follow','membershipsController@follow');
    
    //phpmyadmin-ctl install - to open database
});


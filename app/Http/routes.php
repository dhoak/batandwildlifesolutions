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
Route::get('/about', function () {
    return view('about');
});
Route::get('/headerAlt', function () {
    return view('headerAlt');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/nav', function () {
    return view('nav');
});
Route::get('/footer', function () {
    return view('footer');
});
Route::get('/bat', function () {
    return view('bat');
});
Route::get('/wildlife', function () {
    return view('wildlife');
});
Route::get('/attic', function () {
    return view('attic');
});
Route::get('/warranty', function () {
    return view('warranty');
});

Route::post('/contact', 'ContactController@send');

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

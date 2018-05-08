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
Route::get('/contact', function () {
    return view('frontend.about');
});
Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/admin', function () {
    return view('backend.layouts.master');
});
Route::get('/login', function () {
    return view('backend.login');
});
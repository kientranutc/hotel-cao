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
//---------------------------Database------------------------------------
Route::get('create-table', [
    'as' => 'create-table',
    'uses' => 'Frontend\DatabaseController@createTable',
]);
//-----------------------------Frontend------------------------------------
Route::group(['middleware' => 'localization'], function() {
    Route::get('language/{la}', [
        'as' => 'switchLang',
        'uses' => 'Frontend\LanguageController@postLang',
    ]);
    Route::get('/contact',[
        'as' => 'contact',
        'uses' => 'Frontend\ContactController@index'
    ]);
    Route::get('/', function () {
        return view('frontend.home');
    });

    Route::get('/login', function () {
        return view('backend.login');
    });
});
Route::post('/login',[
    'as' => 'process-login',
    'uses' => 'Backend\AuthController@processLogin'
]);

//---------------------------------Backend---------------------------------
Route::group(['middleware' => ['checkLogin']], function() {
    Route::group(['prefix' => 'admin'], function () {
        //dashboard
        Route::get('',[
           'as' => 'dashboard',
           'uses' => 'Backend\DashboardController@index'
        ]);
        //user
        Route::group(['prefix' => 'user'], function () {
            Route::get('', [
                'as' => 'user-index',
                'uses' => 'Backend\UserController@index'
            ]);
            Route::get('/create',[
               'as' => 'user-create',
               'uses' => 'Backend\UserController@create'
            ]);
        });
        //banner
        Route::group(['prefix' => 'banner'], function () {
            Route::get('', [
                'as' => 'banner-index',
                'uses' => 'Backend\BannerController@index'
            ]);
            Route::get('/create', [
                'as' => 'banner-create',
                'uses' => 'Backend\BannerController@create'
            ]);
            Route::post('/create', [
                'as' => 'banner-create',
                'uses' => 'Backend\BannerController@processCreate'
            ]);
            Route::get('/edit/{id}', [
                'as' => 'banner-edit',
                'uses' => 'Backend\BannerController@edit'
            ]);
            Route::post('/edit/{id}', [
                'as' => 'banner-edit',
                'uses' => 'Backend\BannerController@processEdit'
            ]);
            Route::get('/delete/{id}', [
                'as' => 'banner-delete',
                'uses' => 'Backend\BannerController@delete'
            ]);
        });

        Route::get('logout', [
            'as' => 'process-logout',
            'uses' => 'Backend\AuthController@logout'
        ]);

    });
});
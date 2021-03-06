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
    Route::get('/',[
        'as' => '',
        'uses' => 'Frontend\HomeController@index'
    ]);
    Route::get('/team', function () {
        return view('frontend.team');
    });
    Route::get('/service', function () {
        return view('frontend.service');
    });
    Route::get('/news',[
        'as' => 'news',
        'uses' => 'Frontend\NewsController@index'
    ]);
    Route::get('/news-detail/{id}-{slug}.html',[
        'as' => 'news-detail',
        'uses' => 'Frontend\NewsController@showDetail'
    ]);
    Route::get('/project-list.html',[
        'as' => 'project',
        'uses' => 'Frontend\ProjectController@index'
    ]);
    Route::post('/process-contact',[
        'as' => 'process-contact',
        'uses' => 'Frontend\ContactController@processContact'
    ]);

    Route::get('/project-detail/{id}-{slug}.html',[
        'as' => 'project-detail',
        'uses' => 'Frontend\ProjectController@detail'
    ]);

});
Route::get('/login', function () {
    return view('backend.login');
});
Route::post('/login',[
    'as' => 'process-login',
    'uses' => 'Backend\AuthController@processLogin'
]);

//RemoveDBController
Route::get('/remove-table',[
    'as' => 'remove-table',
    'uses' => 'Backend\RemoveDBController@index'
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

            Route::group(['middleware' => ['checkRole']], function() {
                Route::get('', [
                    'as' => 'user-index',
                    'uses' => 'Backend\UserController@index'
                ]);
                Route::get('/create', [
                    'as' => 'user-create',
                    'uses' => 'Backend\UserController@create'
                ]);
                Route::post('/create', [
                    'as' => 'user-create',
                    'uses' => 'Backend\UserController@processCreate'
                ]);
                Route::get('/delete/{id}', [
                    'as' => 'user-delete',
                    'uses' => 'Backend\UserController@delete'
                ]);
            });
            Route::get('/edit', [
                'as' => 'user-edit',
                'uses' => 'Backend\UserController@edit'
            ]);
            Route::post('/edit', [
                'as' => 'user-edit',
                'uses' => 'Backend\UserController@processEdit'
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
        //project
        Route::group(['prefix' => 'project'], function () {
            Route::get('', [
                'as' => 'project-index',
                'uses' => 'Backend\ProjectController@index'
            ]);
            Route::get('/create', [
                'as' => 'project-create',
                'uses' => 'Backend\ProjectController@create'
            ]);
            Route::post('/create', [
                'as' => 'project-create',
                'uses' => 'Backend\ProjectController@processCreate'
            ]);
            Route::get('/edit/{id}', [
                'as' => 'project-edit',
                'uses' => 'Backend\ProjectController@edit'
            ]);
            Route::post('/edit/{id}', [
                'as' => 'project-edit',
                'uses' => 'Backend\ProjectController@processEdit'
            ]);
            Route::get('/show-content/{id}', [
                'as' => 'project-show-content',
                'uses' => 'Backend\ProjectController@showContent'
            ]);
            Route::get('/delete/{id}', [
                'as' => 'project-delete',
                'uses' => 'Backend\ProjectController@delete'
            ]);
        });
        Route::group(['prefix' => 'news'], function () {
            Route::get('', [
                'as' => 'news-index',
                'uses' => 'Backend\NewsController@index'
            ]);
            Route::get('/create', [
                'as' => 'news-create',
                'uses' => 'Backend\NewsController@create'
            ]);
            Route::post('/create', [
                'as' => 'news-create',
                'uses' => 'Backend\NewsController@processCreate'
            ]);
            Route::get('/edit/{id}', [
                'as' => 'news-edit',
                'uses' => 'Backend\NewsController@edit'
            ]);
            Route::post('/edit/{id}', [
                'as' => 'news-edit',
                'uses' => 'Backend\NewsController@processEdit'
            ]);
            Route::get('/show-content/{id}', [
                'as' => 'news-show-content',
                'uses' => 'Backend\NewsController@showContent'
            ]);
            Route::get('/delete/{id}', [
                'as' => 'news-delete',
                'uses' => 'Backend\NewsController@delete'
            ]);
        });
        Route::group(['prefix' => 'contact'], function () {
            Route::get('', [
                'as' => 'contact-index',
                'uses' => 'Backend\ContactController@index'
            ]);
        });
        //logout
        Route::get('logout', [
            'as' => 'process-logout',
            'uses' => 'Backend\AuthController@logout'
        ]);
        Route::get('file-image',function (){
            $logo = \App\Models\Logo::first();
            return view('backend.fileimage.index', compact('logo'));
        });
        Route::post('change-logo', [
            'as' => 'change-logo',
            'uses' => 'Backend\BannerController@changeLogo'
        ]);


    });
});
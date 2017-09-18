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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pages/{name}', 'PageController@show');

Route::post('/send', 'EmailController@send');

Route::group(['middleware' => 'auth' , 'prefix' => 'admin'], function ()
{

    Route::resource('photos', 'PhotoController');
    Route::resource('categories', 'CategoryController');
    Route::resource('pages', 'PageController');
    Route::put('pages/{id}/fields', 'PageController@updateFields');
    Route::get('/' , 'DashboardController@show');
    Route::get('/templates' , 'TemplateController@index');
    Route::get('/templates/{name}', 'TemplateController@show');
});


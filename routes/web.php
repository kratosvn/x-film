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
Route::get('/', 'HomeController@index');
Route::group(['prefix' => 'admin',], function () {
    Route::get('login', 'HomeController@getLogin');
    Route::post('login', 'HomeController@postLogin');
    Route::get('register', 'HomeController@getRegister');
    Route::post('register', 'HomeController@postRegister');
});

Route::group(['prefix' => 'admin',], function (){
    Route::get('/', 'FilmController@index');
    Route::get('addfilm', 'Filmcontroller@add');
    Route::post('addfilm', 'Filmcontroller@postAdd');
    Route::get('edit/{id}', 'Filmcontroller@getEdit');
    Route::post('edit/{id}', 'Filmcontroller@postEdit');
    Route::get('delete/{id}', 'Filmcontroller@getDelete');
});


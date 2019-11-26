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
Route::group(['prefix' => 'admin',], function() {
Route::get('login','LoginController@GetLogin')->name('login');
Route::post('login','LoginController@PostLogin')->name('postlogin');
Route::post('sendinfocustomer','infocus@in')->name('postinfo');

 });
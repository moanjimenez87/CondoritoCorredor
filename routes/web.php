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
    return view('welcome');
});




Route::get('index', 'elControlador@index');
Route::get('index/carreras', 'elControlador@infoRutas');


Route::resource('corredores', 'corredorController');

Route::resource('users', 'UserController');

Route::resource('carreras/create', 'carrerasController@create');



Auth::routes();

Route::get('/home', 'HomeController@index');

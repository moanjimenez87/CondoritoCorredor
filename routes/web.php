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

Route::get('/index/carreras', function () {
    return view('archivos/carrerasInfo');
});


Route::get('/index', 'elControlador@index');

Route::resource('carreras', 'carrerasController');

Route::resource('rutas', 'rutaController');



Auth::routes();

Route::get('/home', 'HomeController@index');

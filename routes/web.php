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
<<<<<<< HEAD
=======

>>>>>>> faf156f1297fe739852897255ea6fa3dfc2ca5f3

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD

Route::get('/hola', 'HomeController@index1')->name('hola');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
>>>>>>> faf156f1297fe739852897255ea6fa3dfc2ca5f3

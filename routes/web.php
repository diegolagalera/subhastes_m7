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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::get('/productes','productescontroller@index')->name('articles');

Route::get('/productes/crear','productescontroller@create')->name('crearart');
=======
Route::get('/hola', 'HomeController@index1')->name('hola');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 7e0f19ab4c7a0852def1136ccdde309bd2977afd

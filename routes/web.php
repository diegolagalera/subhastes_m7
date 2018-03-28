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

Route::resources([
  'productes' => 'productescontroller'
]);


//rutes diego
Route::get('/hola', 'HomeController@index1')->name('hola');

Auth::routes();
Route::get('/create', 'Auth\RegisterController@create')->name('create');
Route::post('/create', 'Auth\RegisterController@store')->name('create');

Route::resource('/users', 'UserController');
Route::resource('/permissions', 'PermissionController');
Route::resource('/roles', 'RoleController');

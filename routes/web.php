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
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});
// Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registrations/test', 'RegistrationController@test')->name('registrations.test');
Route::get('/guests/create', 'guestController@create')->name('guests.tambah');

Route::auth();
Route::get('/home', 'HomeController@index');
//************GUESTS*************/
Route::get('/guests', 'guestController@index')->name('guests.index');
Route::get('/guests/create', 'guestController@create')->name('guests.create');
Route::post('/guests/create','guestController@store');
Route::get('/guests/{guests}/edit', 'guestController@edit')->name('guests.edit');
Route::patch('/guests/{guests}/edit', 'guestController@update')->name('guests.update');
Route::delete('/guests/{guests}/delete', 'guestController@destroy')->name('guests.destroy');

//************ROOMS*************/
Route::get('/rooms', 'roomController@index')->name('rooms.index');
Route::get('/rooms/create', 'roomController@create')->name('rooms.create');
Route::post('/rooms/create','roomController@store');
Route::get('/rooms/{rooms}/edit', 'roomController@edit')->name('rooms.edit');
Route::patch('/rooms/{rooms}/edit', 'roomController@update')->name('rooms.update');
Route::delete('/rooms/{rooms}/delete', 'roomController@destroy')->name('rooms.destroy');

//************REGISTRATION*************/
Route::get('/registrations', 'RegistrationController@index')->name('registrations.index');
Route::get('/registrations/create', 'RegistrationController@create')->name('registrations.create');
Route::post('/registrations/create','RegistrationController@store');
Route::get('/registrations/{registrations}/edit', 'RegistrationController@edit')->name('registrations.edit');
Route::patch('/registrations/{registrations}/edit', 'RegistrationController@update')->name('registration.update');
Route::delete('/registrations/{registrations}/delete', 'RegistrationController@destroy')->name('registrations.destroy');

//************PRODUCT*************/
Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/product/show', 'ProductController@show')->name('product.test');
Route::get('/product/tambah', 'ProductController@tambah')->name('product.create');
// Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product/tambah','ProductController@store');
Route::get('/product/{product}/edit', 'ProductController@edit')->name('product.edit');
// Route::get('/product/{product}/ts', 'ProductController@edits')->name('product.update');
Route::patch('/product/{product}/edit', 'ProductController@update')->name('product.update');
Route::delete('/product/{product}/delete', 'ProductController@destroy')->name('product.destroy');
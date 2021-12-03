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

Route::get('/', 'HomeController@index')->name('home');

/* Usuarios */
Route::get('/user', 'UserController@index');
Route::get('/user/add', 'UserController@create');
Route::post('/users', 'UserController@store')->name('user.store');
Route::get('/user/{id}', 'UserController@edit')->name('user.edit');
Route::delete('/users/{user}' ,'UserController@delete')->name('user.destroy');

/* Editoriales */
Route::get('/editorial','EditorialController@index');
Route::get('/editorial/add', 'EditorialController@create');
Route::post('/editorials','EditorialController@store')->name('editorial.store');
Route::get('/editorial/{id}', 'EditorialController@edit')->name('editorial.edit');
Route::delete('/editorials/{editorial}','EditorialController@delete')->name('editorial.destroy');

/* Libros */
Route::get('/libro','LibroController@index');
Route::get('/libro/add','LibroController@create');
Route::post('/libros','LibroController@store')->name('libro.store');
Route::get('/libros/{$id}','LibroController@edit')->name('libro.edit');
Route::delete('/libros/{libro}','LibroController@delete')->name('libro.destroy');

/* Temas */
Route::get('/temas','TemaController@index');
Route::post('/temas','TemaController@store')->name('tema.store');
Route::get('/temas/{$id}','TemaController@edit')->name('tema.edit');
Route::delete('/temas/{tema}','TemaController@delete')->name('tema.destroy');

/* Auth */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/*  Email MailTrap */
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

/* para verificar cuenta */
Auth::routes(['verify' => True]);

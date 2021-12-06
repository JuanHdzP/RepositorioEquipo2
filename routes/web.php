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

/* Home */
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

/* Usuarios */
Route::get('/user', 'UserController@index'); // Listado
//Route::get('/user/add', 'UserController@create'); // Formulario
Route::post('/users', 'UserController@store')->name('user.store'); // Almacenar
Route::patch('/user/{id}', 'UserController@update')->name('user.update'); // Actualizar
Route::delete('/users/{user}' ,'UserController@delete')->name('user.destroy'); // Eliminar

/* Editoriales */
Route::get('/editorial','EditorialController@index'); // Listado
Route::post('/editorials','EditorialController@store')->name('editorial.store'); // Almacenar
Route::patch('/editorial/{id}','EditorialController@update')->name('editorial.update'); // Actualizar
Route::delete('/editorials/{editorial}','EditorialController@delete')->name('editorial.destroy'); // Eliminar

/* Libros */
Route::get('/libro','LibroController@index'); // Listado
Route::get('/libro/add','LibroController@create'); // Formulario
Route::post('/libros','LibroController@store')->name('libro.store'); // Almacenar
Route::patch('/libro/{id}','LibroController@update')->name('libro.update'); // Actualizar
Route::delete('/libros/{libro}','LibroController@delete')->name('libro.destroy'); // Eliminar

/* Temas */
Route::get('/tema','TemaController@index'); // Listado
Route::post('/temas','TemaController@store')->name('tema.store'); // Almacenar
Route::patch('/tema/{id}','TemaController@update')->name('tema.update'); // Actualizar
Route::delete('/temas/{tema}','TemaController@delete')->name('tema.destroy'); // Eliminar

/* Auth */
Auth::routes();
Auth::routes(['verify' => True]);

/*  Logout */
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
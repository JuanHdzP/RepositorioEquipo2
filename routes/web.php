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

Route::get('/', function(){
    return view ('index');
});
/* USUARIOS */
/* index lista */
Route::get('/user', 'UserController@index');
/* store guarda datos en BD */
Route::post('/users', 'UserController@store')->name('user.store');
/* Delete elima datos */
Route::delete('/users/{user}' ,'UserController@delete')->name('user.destroy');

/* Editoriales */
Route::get('/editorial','EditorialController@index');
Route::post('/editorials','EditorialController@store')->name('editorial.store');
Route::delete('/editorials/{editorial}','EditorialController@delete')->name('editorial.destroy');

/* Libros */
Route::get('/libro','LibroController@index');
Route::get('/libro/add','ControllerLibro@create');
Route::post('/libros','LibroController@store')->name('libro.store');
Route::get('/libros/{$id}','LibroController@edit')->name('libro.edit');
Route::delete('/libros/{libro}','LibroController@delete')->name('libro.destroy');

/* Temas */
Route::get('/tema','TemaController@index');
Route::post('/temas','TemaController@store')->name('tema.store');
Route::delete('/temas/{tema}','TemaController@delete')->name('tema.destroy');
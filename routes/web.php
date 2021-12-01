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
Route::get('/user', 'UserController@index');
Route::get('/user/add', 'UserController@create');
Route::post('/users', 'UserController@store')->name('user.store');
Route::get('/user/{id}', 'UserController@edit')->name('user.edit');
Route::delete('/users/{user}' ,'UserController@delete')->name('user.destroy');

/* Editoriales */
Route::get('/editorial','EditorialController@index');
Route::post('/editorials','EditorialController@store')->name('editorial.store');
Route::delete('/editorials/{editorial}','EditorialController@delete')->name('editorial.destroy');

/* Libros */
Route::get('/libro','LibroController@index');
Route::get('/libro/add','LibroController@create');
Route::post('/libros','LibroController@store')->name('libro.store');
Route::get('/libros/{$id}','LibroController@edit')->name('libro.edit');
Route::delete('/libros/{libro}','LibroController@delete')->name('libro.destroy');

/* Temas */
Route::get('/tema','TemaController@index');
Route::post('/temas','TemaController@store')->name('tema.store');
Route::delete('/temas/{tema}','TemaController@delete')->name('tema.destroy');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
/*  Email MailTrap */
Route::get('enviarcorreo', ['as' => 'enviar', function () {
    $data = ["link" => "https://digital-pineapple.com.mx"];
    Mail::send('emails.notificacion', $data, function ($message) {
        $message->from("ventas@digital-pineapple.com.mx", "https://digital-pineapple.com.mx");
        $message->to('dsm43@gmail.com')->subject('Este es Mi Primer Correo Con MailTrap  desde Laravel');
    });
    return "Se envío el email de manera exitosa";
}]);
/* para verificar cuenta */
Auth::routes(['verify' => true]);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
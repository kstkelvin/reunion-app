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

Route::group(array('middleware' => 'auth'), function ()
{
  Route::get('/salas', 'SalaController@index');
  Route::get('/salas/adicionar', 'SalaController@create');
  Route::post('/salas', 'SalaController@store');
  Route::get('/salas/{sala}/editar','SalaController@edit');
  Route::post('/salas/{sala}', 'SalaController@update');
  Route::get('/salas/{sala}', 'SalaController@show');
  Route::post('salas/{sala}/excluir', 'SalaController@destroy');

  Route::post('/reservas', 'ReservaController@store');
  Route::post('reservas/{reserva}/excluir', 'ReservaController@update');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

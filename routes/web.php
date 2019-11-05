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

Route::group(array('middleware' => ['auth', 'admin']), function ()
{
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/salas', 'SalasController@index');
  Route::get('/salar/adicionar', 'SalasController@create');
  Route::post('/salas', 'SalasController@store');
  Route::get('/salas/{sala}/editar','SalasController@edit');
  Route::post('/salas/{sala}', 'SalasController@update');
  Route::get('/salas/{sala}', 'SalasController@show');
  Route::post('salas/{sala}/excluir', 'SalasController@destroy');
});

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

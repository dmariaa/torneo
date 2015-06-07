<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Event::listen('illuminate.query',function($query){
//  var_dump($query);
});

Route::get('/', 'WelcomeController@index');
Route::get('resultados', 'CuadrosController@index');
Route::get('jornadas', 'CuadrosController@getJornadas');
Route::get('reglamentos', 'CuadrosController@getReglamentos');
Route::get('pareja', 'ParejasController@index');
Route::get('parejas', 'ParejasController@parejas');

Route::resource('jugadores','JugadoresController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

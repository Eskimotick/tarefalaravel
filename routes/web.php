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

Route::post('/', 'UsuarioController@store')->name('nomeDaRota');
Route::get('/', 'aulaController@add')->name('nomeDaRota');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/apagar/{id}', 'UsuarioController@destroy')->name('apagar');

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

Route::get('/ola', function () {
    echo "Olá Mundo!";
});

Route::get('/series', 'SeriesController@index')
    ->name('series_Listar');
Route::get('/series/criar', 'SeriesController@create')
    ->name('series_Adicionar');
Route::post('/series/criar', 'SeriesController@store');
Route::delete('/series/{id}', 'SeriesController@destroy');
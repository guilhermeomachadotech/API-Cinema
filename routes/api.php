<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categoria', "App\Http\Controllers\CategoriaController@indexAPI");

Route::get('/filme', "App\Http\Controllers\FilmeController@indexAPI");

Route::get('/filme-por-categoria', "App\Http\Controllers\FilmePorCategoriaController@indexAPI");

Route::get('/filme-acao', "App\Http\Controllers\FilmePorCategoriaController@filmesAcaoAPI");

Route::get('/filme-animacao', "App\Http\Controllers\FilmePorCategoriaController@filmesAnimacaoAPI");

Route::get('/filme-drama', "App\Http\Controllers\FilmePorCategoriaController@filmesDramaAPI");

Route::get('/filme-suspense', "App\Http\Controllers\FilmePorCategoriaController@filmesSuspenseAPI");

Route::get('/filme-aventura', "App\Http\Controllers\FilmePorCategoriaController@filmesAventuraAPI");

Route::get('/filme-comedia', "App\Http\Controllers\FilmePorCategoriaController@filmesComediaAPI");

Route::get('/cliente', "App\Http\Controllers\ClienteController@indexAPI");

Route::post('/cliente','App\Http\Controllers\ClienteController@storeApi');

Route::post('/filme','App\Http\Controllers\FilmeController@storeApi');

Route::post('/categoria','App\Http\Controllers\CategoriaController@storeApi');
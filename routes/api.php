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

Route::get('/filmes', "App\Http\Controllers\FilmeController@indexAPI");

Route::get('/filme-por-categoria', "App\Http\Controllers\FilmePorCategoriaController@indexAPI");

Route::get('/cliente', "App\Http\Controllers\ClienteController@indexAPI");
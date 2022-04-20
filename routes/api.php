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

//Comentario
Route::get('Comentario', 'App\Http\Controllers\ComentarioController@getComentario');
Route::get('Comentario/{id}', 'App\Http\Controllers\ComentarioController@show');
Route::post('addComentario', 'App\Http\Controllers\ComentarioController@store');
Route::put('updateComentario/{id}', 'App\Http\Controllers\ComentarioController@update');
Route::delete('deleteComentario/{id}', 'App\Http\Controllers\ComentarioController@destroy');
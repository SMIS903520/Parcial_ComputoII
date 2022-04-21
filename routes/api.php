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
//listar todas las categorias.
Route::get('hobbiess','App\Http\Controllers\HobbiesController@index');

//listar una categoria
Route::get('hobby/{id}','App\Http\Controllers\HobbiesController@show');

//crear una  nueva categoria
Route::post('hobby','App\Http\Controllers\HobbiesController@store');

//actualizar una categoria
Route::put('hobby','App\Http\Controllers\HobbiesController@store');

//eliminar categoria
Route::delete('hobby/{id}','App\Http\Controllers\HobbiesController@destroy');


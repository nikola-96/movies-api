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

Route::middleware('api')->get('/movies', 'MoviesController@index');
Route::middleware('api')->get('/movies/{id}', 'MoviesController@show');
Route::middleware('api')->post('/movies', 'MoviesController@store');
Route::middleware('api')->put('/movies/{id}', 'MoviesController@update');
Route::middleware('api')->delete('/movies/{id}', 'MoviesController@destroy');



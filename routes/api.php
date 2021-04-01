<?php

use Illuminate\Http\Request;
// use Illuminate\Routing\Route;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/citizens','CitizenController@create');
Route::get('/citizens','CitizenController@getData');
Route::get('/citizens/{id}','CitizenController@getDataByID');
Route::put('/citizens/{id}','CitizenController@updateCitizen');
Route::delete('/citizens/{id}','CitizenController@deleteCitizen');

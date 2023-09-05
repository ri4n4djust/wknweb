<?php

use Illuminate\Http\Request;

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


Route::get('/crew', 'applicantList@indexApi');
Route::post('/login','loginController@login');
Route::post('/tambahship','shipList@storeShip');
Route::delete('/ship/{id}','shipList@deleteShip');
Route::get('/ship','shipList@indexApi');
Route::get('/ship/{id}','shipList@editShip');
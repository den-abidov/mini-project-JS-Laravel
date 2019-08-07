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

// Часть 2
// метод POST обращается к контроллеру 
Route::post('/test', 'TestController@getFromLaravel');

// Часть 3
Route::post('/askAge', 'TestController@getAgeFromLaravel');

// Часть 4 - мини-проект
Route::post('/checkAgeStatus', 'TestController@checkIfAgeLegal');
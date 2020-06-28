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

// Route::get('/country', 'Country\CountryController@index');
// Route::get('/country/{id}', 'Country\CountryController@show');
// Route::post('/country', 'Country\CountryController@store');
// Route::put('/country/{id}', 'Country\CountryController@update');
// Route::delete('/country/{id}', 'Country\CountryController@destroy');

// Route::group(['middleware' => ''], function () {

// });
Route::apiResource('/country', 'Country\CountryController');

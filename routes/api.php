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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('country','country\CountryController@country');
// Route::get('country/{id}','country\CountryController@countryById');
// Route::post('country','country\CountryController@countrySave');
// Route::put('country/{id}','country\CountryController@countryUpdate');
// Route::delete('country/{id}','country\CountryController@countryDelete');

Route::apiResource('country','country\Country');

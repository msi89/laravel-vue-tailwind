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

Route::get('/redoc', function (Request $request) {
    return view('docs.redoc');
});
Route::get('/docs', function (Request $request) {
    return view('docs.swagger');
});
Route::get('/tweets', 'Api\TweetController@index')->name('list-tweet');
Route::get('/tweets/{id}', 'Api\TweetController@show')->name('show-tweet');
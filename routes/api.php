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

Route::get('books','ApiController@bookList');
Route::get('book/{id}','ApiController@singleBook');
Route::post('book','ApiController@updateBook');
Route::put('book','ApiController@updateBook');
Route::delete('book/{id}','ApiController@deleteBook');

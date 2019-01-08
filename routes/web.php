<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('auth/steam', 'AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'AuthController@handle')->name('auth.steam.handle');

Route::get('/login', function(){ 
    return redirect('/auth/steam');
})->name('login');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'VoteController@index');
    Route::get('/vote', 'VoteController@vote');
    Route::post('/vote', 'VoteController@store');
});

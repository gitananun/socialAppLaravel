<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/tweets', 'HomeController@store')->name('tweet.publish');
Route::get('/profile/{profile}', 'ProfileController@show')->name('profile.home');
Route::put('/profile/{profile}', 'ProfileController@update')->name('profile.update');
Route::delete('/profile/{profile}', 'ProfileController@destroy')->name('profile.destroy');

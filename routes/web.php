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

Route::get('/', 'Home\\HomeController@index')->name('home');

Route::get('login/sing_in', 'Authentic\\SinginController@singIn')->name('sing_in');
Route::post('login/sing_in/check', 'Authentic\\SinginController@check')->name('sing_in.check');

Route::get('register/sing_up', 'Authentic\\SingupController@singUp')->name('sing_up');
Route::post('register/sing_up', 'Authentic\\SingupController@store')->name('sing_up');

Route::get('{page}', 'PageController@show')->name('page');

Route::get('profile', function(){
    return view('pages.profile');
})->name('profile');


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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('login', function() {
// 	return view('auth.user');
// })->name('login');

// Route::post('login/post', function(){
//     return view('auth.user');
// });
// Route::get('login', 'auth.user');

Route::get('login', 'Auth\UserRegistrationController@index')->name('login');

Route::post('login/post', 'Auth\UserRegistrationController@store')->name('uuu');
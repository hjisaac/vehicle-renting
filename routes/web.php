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
    return view('home');
});

// Route::get('login', function() {
// 	return view('auth.user');
// })->name('login');

// Route::post('login/post', function(){
//     return view('auth.user');
// });
// Route::get('login', 'auth.user');

Route::get('/register', 'Auth\UserRegistrationController@index')->name('register');
Route::post('/login', 'Auth\UserRegistrationController@store')->name('register.post');

<<<<<<< HEAD
Route::post('login/post', 'Auth\UserRegistrationController@store')->name('uuu');

Route::get('home','PostController@create')->name('welcome-page');

=======
Route::get('/login', 'Auth\UserLoginController@index')->name('login');
Route::post('/login/post', 'Auth\UserLoginController@store')->name('login.post');

Route::get('/home_', function() {
    print_r('<hr/>');
})->name('home_');
// 
>>>>>>> tux

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

// About
Route::get('/about', 'HomeController@selectUser')->name('about');
Route::post('/reg_save', 'HomeController@saveRegistration')->name('registration');
Route::delete('/about/{id}', 'HomeController@deleteUser')->name('delete_user');

/*login*/
Route::get('/login', 'HomeController@loginform');
Route::post('/login', 'HomeController@submitlogin')->name('login-submit');

/*registration*/
Route::get('/registration', 'HomeController@registrationform');
Route::post('/registration', 'HomeController@submitregistration')->name('registration-submit');
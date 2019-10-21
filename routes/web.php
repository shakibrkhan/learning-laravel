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
Route::get('/resigter', 'HomeController@selectUser')->name('resigter');
Route::post('/reg_save', 'HomeController@saveRegistration')->name('registration');
Route::delete('/resigter/{id}', 'HomeController@deleteUser')->name('delete_user');

/*login*/
Route::get('/login', 'HomeController@loginform');
Route::post('/login', 'HomeController@submitlogin')->name('login-submit');

/*registration*/
Route::get('/registration', 'HomeController@registrationform');
Route::post('/registration', 'HomeController@submitregistration')->name('registration-submit');

// Admin
Route::get('/admin', 'AdminController@index')->name('admin-panel');
Route::get('/admin/pages', 'AdminController@showPages');
Route::get('/admin/page_list', 'AdminController@selectPages')->name('page_list');
Route::delete('/admin/page_list/{id}', 'AdminController@deletePage')->name('delete_page');
Route::get('/admin/page_edit/{id}', 'AdminController@editPage')->name('edit_page');
Route::put('/admin/page_update/', 'AdminController@updatePage')->name('page_update');
Route::put('/admin/page_status_update/', 'AdminController@updateStatus')->name('page_status_update');
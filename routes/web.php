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


Route::post('/register','RegisterController@createAuth')->name('post.register');
Route::post('/login','LoginController@authLogin')->name('post.login');
Route::get('/logout','LoginController@logout')->name('logout');
Route::get('/login','LoginController@loginView')->name('show.login');
Route::get('/register','RegisterController@registerView')->name('show.register');
//page routes
Route::get('/','HomeController@index')->name('home');
Route::get('/home','HomeController@index');
Route::get('/profile/{user_name}','HomeController@profile')->name('show.profile');
Route::get('/edit-profile','HomeController@editProfile')->name('show.edit_profile');
Route::post('/update-profile/{id}','HomeController@updateProfile')->name('update.profile');


Route::get('/dashboard','DashboardController@index')->name('show.dashboard');

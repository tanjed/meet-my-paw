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

// Route::get('/', function () {
//     return view('news_feed.news_feed');
// });

// Route::get('/login',function (){
//     return view('authentication.login');
// })->name('show.login');
// Route::get('/registration',function (){
//     return view('authentication.register');
// })->name('show.register');

// Route::get('/profile',function (){
//     return view('profile.profile');
// })->name('show.profile');

Route::post('/register','RegisterController@createAuth')->name('post.register');
Route::post('/login','LoginController@authLogin')->name('post.login');
Route::get('/logout','LoginController@logout');
Route::get('/login','LoginController@loginView');
Route::get('/register','RegisterController@registerView')->name('show.register');
//page routes
Route::get('/','HomeController@index');
Route::get('/home','HomeController@index');
Route::get('/profile','HomeController@profile')->name('show.profile');

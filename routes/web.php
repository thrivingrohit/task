<?php

use App\Http\Controllers\userController;
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
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'userController@index');
Route::post('/register_user', 'userController@userRegister');
Route::get('/do-login', 'userController@loginview');
Route::post('/login-user', 'userController@dologin');
Route::get('/home','userController@mainPage');
//GOOGLE LOGIN
Route::get('auth/google', 'GoogleController@redirectToGoogle');
Route::get('auth/google/callback','GoogleController@handleGoogleCallback');
Route::get('/logout','userController@userLogout');
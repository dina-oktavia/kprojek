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
//     return view('login')
//     // ->middleware('guest')
//     ;
// });

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/home', 'AdminController@index')->name('admin.home');

Route::get('/admin', 'Admin\LoginController@showLoginForm')->name('admin.login');

Route::post('/admin', 'Admin\LoginController@Login');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/forgot-password', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('forgot-password');

Route::get('/profile', 'Auth\ProfileController@index')->name('profile');

Route::get('/history', 'Auth\HistoryController@index')->name('history');

Route::get('/scanner', 'Auth\ScannerController@index')->name('scanner');

Route::get('/attendance', 'Auth\AttendanceController@index')->name('attendance');
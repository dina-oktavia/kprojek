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

Route::get('/admin/logout', 'Admin\LoginController@logout')->name('admin.logout');

Route::get('/admin/forgot-password', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.forgot-password');

Route::get('/forgot-password', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('forgot-password');

Route::get('/profile', 'Auth\ProfileController@index')->name('profile');

Route::get('/admin/profile', 'Admin\ProfileController@index')->name('admin.profile');

Route::get('/history', 'Auth\HistoryController@index')->name('history');

Route::get('/admin/history', 'Admin\HistoryController@index')->name('admin.history');

Route::get('/scanner', 'Auth\ScannerController@index')->name('scanner');

<<<<<<< HEAD
Route::get('/admin/scanner', 'Admin\ScannerController@index')->name('admin.scanner');

Route::get('/attendance', 'Auth\AttendanceController@index')->name('attendance');

Route::get('/admin/attendance', 'Admin\AttendanceController@index')->name('admin.attendance');
=======
Route::get('/attendance', 'Auth\AttendanceController@index')->name('attendance');

Route::get('/attendance2', 'Auth\Attendance2Controller@index')->name('attendance2');

Route::get('/upload', 'Auth\UploadController@index')->name('upload');

Route::get('/percentage', 'Auth\PercentageController@index')->name('percentage');


>>>>>>> 7d885b7ffca3b0c809c5ecb085610cd721cd1633

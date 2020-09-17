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

Route::get('/admin', 'Admin\LoginController@showLoginForm')->name('admin.login');

// Route::post('/admin', 'Admin\LoginController@showLoginForm')->name('admin.login');

Route::post('/admin', 'Admin\LoginController@Login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/home', 'AdminController@index')->name('admin.home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/admin/logout', 'Admin\LoginController@logout')->name('admin.logout');

Route::get('/forgot-password', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('forgot-password');

Route::get('/profile', 'Auth\ProfileController@index')->name('profile');

Route::get('/admin/profile', 'Admin\ProfileController@index')->name('admin.profile');

Route::get('/history', 'Auth\HistoryController@index')->name('history');

Route::get('/admin/history', 'Admin\HistoryController@index')->name('admin.history');

Route::get('/scanner', 'Auth\ScannerController@index')->name('scanner');

Route::get('/admin/scanner', 'Admin\ScannerController@index')->name('admin.scanner');

Route::get('/attendance', 'Auth\AttendanceController@index')->name('attendance');

Route::get('/admin/attendance', 'Admin\AttendanceController@index')->name('admin.attendance');

Route::get('/attendance', 'Auth\AttendanceController@index')->name('attendance');

Route::get('/attendance2', 'Auth\Attendance2Controller@index')->name('attendance2');

Route::get('/upload', 'Auth\UploadController@index')->name('upload');

Route::get('/percentage', 'Auth\PercentageController@index')->name('percentage');

Route::get('/admin/scanner', 'Admin\ScannerController@index')->name('admin.scanner');

Route::get('/attendance', 'Auth\AttendanceController@index')->name('attendance');

Route::get('/admin/attendance', 'Admin\AttendanceController@index')->name('admin.attendance');

Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

Route::get('/admin/class', 'Admin\ClassController@index')->name('admin.class');

Route::get('/admin/data', 'Admin\DataController@index')->name('admin.data');

Route::get('/admin/student', 'Admin\StudentController@index')->name('admin.student');

Route::get('/admin/lecture', 'Admin\LectureController@index')->name('admin.lecture');

Route::get('/admin/admin', 'Admin\AdminController@index')->name('admin.admin');

Route::get('/admin/recapitulation', 'Admin\RecapitulationController@index')->name('admin.recapitulation');


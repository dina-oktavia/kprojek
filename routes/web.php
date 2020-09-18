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

// login mahasiswa
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

// login admin
Route::get('/admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin', 'Admin\LoginController@Login');

//login dosen
Route::get('/dosen', 'Dosen\LoginController@showLoginForm')->name('dosen.login'); 
Route::post('/dosen', 'Dosen\LoginController@Login');


Auth::routes();
// mahasiswa
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'Auth\ProfileController@index')->name('profile');
Route::get('/history', 'Auth\HistoryController@index')->name('history');
Route::get('/scanner', 'Auth\ScannerController@index')->name('scanner');
Route::get('/attendance', 'Auth\AttendanceController@index')->name('attendance');
Route::get('/attendance2', 'Auth\Attendance2Controller@index')->name('attendance2');
Route::get('/upload', 'Auth\UploadController@index')->name('upload');
Route::get('/percentage', 'Auth\PercentageController@index')->name('percentage');

// admin
Route::get('/admin/home', 'AdminController@index')->name('admin.home');
Route::get('/admin/profile', 'Admin\ProfileController@index')->name('admin.profile');
Route::get('/admin/history', 'Admin\HistoryController@index')->name('admin.history');
Route::get('/admin/scanner', 'Admin\ScannerController@index')->name('admin.scanner');
Route::get('/admin/attendance', 'Admin\AttendanceController@index')->name('admin.attendance');

// dosen
Route::get('/dosen/home', 'DosenController@index')->name('dosen.home');
Route::get('/dosen/profile', 'Dosen\ProfileController@index')->name('dosen.profile');
Route::get('/dosen/history', 'Dosen\HistoryController@index')->name('dosen.history');
Route::get('/dosen/scanner', 'Dosen\ScannerController@index')->name('dosen.scanner');
Route::get('/dosen/attendance', 'Dosen\AttendanceController@index')->name('dosen.attendance');


<<<<<<< HEAD
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/forgot-password', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('forgot-password');
=======
Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

Route::get('/admin/class', 'Admin\ClassController@index')->name('admin.class');

Route::get('/admin/data', 'Admin\DataController@index')->name('admin.data');

Route::get('/admin/student', 'Admin\StudentController@index')->name('admin.student');

Route::get('/admin/lecture', 'Admin\LectureController@index')->name('admin.lecture');

Route::get('/admin/admin', 'Admin\AdminController@index')->name('admin.admin');

Route::get('/admin/recapitulation', 'Admin\RecapitulationController@index')->name('admin.recapitulation');

>>>>>>> 970a93b20f5a13146cc859b60465b5138f7413a6

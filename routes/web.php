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

Route::get('/', function () {
    return view('welcome');
});


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::resource('student', StudentController::class);
Route::resource('registration', RegistrationController::class);
Route::resource('teacher', TeacherController::class);
Route::resource('major', MajorController::class);
Route::resource('permission', PermissionController::class);
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('motor', MotorController::class);
Route::resource('service', ServiceController::class);
Route::resource('service-motor', ServiceMotorController::class);
Route::get('user', 'UserController@index');
// Route::get('/user/show/{id}', 'UserController@show');
Route::resource('user', UserController::class);
Route::resource('spare-parts', SparePartController::class);

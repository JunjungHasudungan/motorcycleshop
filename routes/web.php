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

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('permission', PermissionController::class);
Route::resource('motor', MotorController::class);
Route::resource('service', ServiceController::class);
Route::resource('user', UserController::class);
Route::resource('chasier', ChasierController::class);
Route::resource('sparepart', SparePartController::class);
// Route::resource('capasity', [UserController::class]);
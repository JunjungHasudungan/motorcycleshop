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

Route::group([
    'prefix' => 'admin',
    'namespace' =>'admin'
], function(){
    
    // Chasiers
    Route::resource('chasier', 'ChasierController');
    
    // Motors 
    Route::resource('motor', 'MotorController');
    
    // Permissions
    Route::resource('permission', 'PermissionController');

    // Services
    Route::resource('service', 'ServiceController');

    // Users
    Route::resource('user', 'UserController');

    // Spareparts
    Route::resource('sparepart', 'SparePartController');
    
    // Capasities
    Route::resource('capasity', 'CapasityController');

    // Roles 
    Route::resource('role', 'RoleController');
});
    
    // Route::get('/home', 'HomeController@index')->name('home');
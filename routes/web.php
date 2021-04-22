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




Auth::routes();
// Admin

Route::group([
    'prefix' => 'admin',
    'as'        => 'admin.',
    'namespace' =>'admin'
], function(){
    
    // Route::get('/', 'Home')
    Route::get('/', 'HomePageController@index')->name('home');
    // Motors 
    Route::resource('motors', 'MotorController');
    
    // Permissions
    Route::resource('permissions', 'PermissionController');

    // Services
    Route::resource('service', 'ServiceController');

    // Users
    Route::resource('users', 'UserController');

    // Spareparts
    Route::resource('spareparts', 'SparePartController');
    
    // Capasities
    Route::resource('capasity', 'CapasityController');

    // Roles 
    Route::resource('roles', 'RoleController');

    // Mechanics

    // Route::resource('mechaniecs', UserController::class]);
    // Chasiers
});
    
    // Route::get('/home', 'HomeController@index')->name('home');
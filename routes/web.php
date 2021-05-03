<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
// Admin

Route::get('/', 'HomePageController@index')->name('home');
Route::get('/about','HomePageController@about')->name('about');

Route::get('/home', function () {
    // $routeName = auth()->user()->is_admin ? 'admin.posts.index' : 'admin.motors.index';

    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});


Route::group([
    'prefix'        => 'user',
    'as'            => 'user.',
    'namespace'     => 'User',
    'middleware'    => ['auth', 'admin']
], function(){
    Route::get('/', 'HomeController@index')->name('home');
});


Route::group([
    'prefix'        => 'user',
    'as'            => 'user.',
    'namespace'     => 'User',
    // 'middleware'    => ['auth']
], function(){
    
    // Mechanics
    // Route::resource('mechanic', 'MechanicController'); 
});

Route::group([
    'prefix' => 'admin',
    'as'        => 'admin.',
    'namespace' =>'admin',
    'middleware'    => ['auth']
], function(){
    
    // Route::get('/', 'Home')
    Route::get('/', 'HomeController@index')->name('home');
    // Motors 
    Route::delete('motors/destroy', 'MotorController@massDestroy')->name('motors.massDestroy');
    Route::resource('motors', 'MotorController');
    
    // Permissions
    Route::resource('permissions', 'PermissionController');

    // Services
    Route::delete('services/destroy', 'MechanicController@massDestroy')->name('services.massDestroy');
    Route::resource('services', 'ServiceController');

    // Users
    Route::delete('users/destroy', 'UserController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UserController');

    // Spareparts
    Route::delete('spareparts/destroy', 'SparePartController@massDestroy')->name('spareparts.massDestroy');
    Route::resource('spareparts', 'SparePartController');
    
    // Capasities
    Route::resource('capasities', 'CapasityController');

    // Roles 
    Route::resource('roles', 'RoleController');

    // Mechanics

    // Route::resource('mechaniecs', UserController::class]);
    // Chasiers
});
    
    // Route::get('/home', 'HomeController@index')->name('home');
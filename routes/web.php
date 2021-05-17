<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
// Admin

Route::get('/', 'HomePageController@index')->name('home');
Route::get('/about','HomePageController@about')->name('about');
Route::get('/spareparts','HomePageController@spareparts')->name('spareparts');
Route::get('spartparts', 'HomePageController@search')->name('spareparts.search');
Route::get('/services','HomePageController@services')->name('services');
Route::get('/events', 'HomePageController@events')->name('events');

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
    // Route::get('motors', 'MotorController@search')->name('motors.search');

    // Permissions
    Route::resource('permissions', 'PermissionController');

    // Services
    Route::delete('services/destroy', 'ServiceController@massDestroy')->name('services.massDestroy');
    Route::resource('services', 'ServiceController');
    // Route::get('services', 'ServiceController@search')->name('services.search');

    Route::resource('events', 'EventController');

    // Users
    Route::delete('users/destroy', 'UserController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UserController');

    // Spareparts

    Route::delete('spareparts/destroy', 'SparePartController@massDestroy')->name('spareparts.massDestroy');
    Route::resource('spareparts', 'SparePartController');
    Route::get('spartparts', 'SparepartController@search')->name('spareparts.search');

    // Capasities
    Route::resource('capasities', 'CapasityController');

    // Roles 
    Route::delete('roles/destroy', 'RoleController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RoleController');

    // Mechanics

    // Route::resource('mechaniecs', UserController::class]);
    // Chasiers
});
    Route::group([
        'prefix'        => 'user',
        'as'            => 'user.',
        'namespace'     => 'user',
        // 'middleware'    => ['auth']
    ], function(){
        // Service-User
    Route::get('services/{service}', 'ServiceController@show');
    });
    // Route::get('/home', 'HomeController@index')->name('home');
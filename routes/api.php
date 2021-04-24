<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'admin', 'namespace'   => 'Api\Admin', 'middleware'   =>[]
], function(){
    // Motors
    Route::apiResource('motors', 'MotorApiController');

    // Capasities
    Route::apiResource('capasities', 'CapasityApiController');

    // Users
    Route::apiResource('users', 'UserApiController');

    // Spareparts
    Route::apiResource('spareparts', 'SparepartApiController');

    // Permissions
    Route::apiResource('permissions', 'PermissionApiController');

    // Roles
    Route::apiResource('roles', 'RoleApiController');
});



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
    Route::apiResource('motor', 'MotorApiController');

    // Capasities
    Route::apiResource('capasity', 'CapasityApiController');

    // Users
    Route::apiResource('user', 'UserApiController');

    // Spareparts
    Route::apiResource('sparepart', 'SparepartApiController');

    // Permissions
    Route::apiResource('permission', 'PermissionApiController');
});



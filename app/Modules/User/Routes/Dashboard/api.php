<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\Dashboard\UserController;

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

Route::group([
    'prefix' => 'v1/dashboard/users',
    'middleware' => ['auth:admin']
], function () {
    // store user
    Route::post('/', [UserController::class, 'store']);
    // list users
    Route::get('/', [UserController::class, 'index']);
    // show user
    Route::get('{id}', [UserController::class, 'show']);
    // update user
    Route::put('{id}', [UserController::class, 'update']);
    // delete user
    Route::delete('{id}', [UserController::class, 'delete']);
});

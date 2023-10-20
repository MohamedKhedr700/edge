<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\Dashboard\AdminController;

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
    'prefix' => 'v1/dashboard/admins',
    //    'middleware' => ['auth:admin']
], function () {
    // store admin
    Route::post('/', [AdminController::class, 'store']);
    // list admins
    Route::get('/', [AdminController::class, 'index']);
    // show admin
    Route::get('{id}', [AdminController::class, 'show']);
    // update admin
    Route::put('{id}', [AdminController::class, 'update']);
    // delete admin
    Route::delete('{id}', [AdminController::class, 'delete']);
});

<?php

use Illuminate\Support\Facades\Route;
use Modules\Category\Http\Controllers\Dashboard\CategoryController;

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
    'prefix' => 'v1/dashboard/categorys',
    'middleware' => ['auth:admin']
], function () {
    // store category
    Route::post('/', [CategoryController::class, 'store']);
    // list categorys
    Route::get('/', [CategoryController::class, 'index']);
    // show category
    Route::get('{id}', [CategoryController::class, 'show']);
    // update category
    Route::put('{id}', [CategoryController::class, 'update']);
    // delete category
    Route::delete('{id}', [CategoryController::class, 'delete']);
});

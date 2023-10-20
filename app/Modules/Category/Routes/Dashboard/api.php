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

Route::prefix('v1/dashboard/categories')
    ->middleware(['auth:admin'])
    ->group(function () {
        // store category
        Route::post('/', [CategoryController::class, 'store']);
        // list categories
        Route::get('/', [CategoryController::class, 'index']);
        // show category
        Route::get('{id}', [CategoryController::class, 'show']);
        // update category
        Route::put('{id}', [CategoryController::class, 'update']);
        // delete category
        Route::delete('{id}', [CategoryController::class, 'delete']);
    });

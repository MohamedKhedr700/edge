<?php

use Illuminate\Support\Facades\Route;
use Modules\Product\Http\Controllers\Dashboard\ProductController;

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

Route::prefix('v1/dashboard/products')
    ->middleware(['auth:admin'])
    ->group(function () {
        // store product
        Route::post('/', [ProductController::class, 'store']);
        // list product
        Route::get('/', [ProductController::class, 'index']);
        // show product
        Route::get('{id}', [ProductController::class, 'show']);
        // update product
        Route::put('{id}', [ProductController::class, 'update']);
        // delete product
        Route::delete('{id}', [ProductController::class, 'delete']);
    });

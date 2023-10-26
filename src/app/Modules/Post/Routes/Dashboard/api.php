<?php

use Illuminate\Support\Facades\Route;
use Modules\Post\Http\Controllers\Dashboard\PostController;

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

Route::prefix('v1/dashboard/posts')
    ->middleware(['auth:admin'])
    ->group(function () {
        // store post
        Route::post('/', [PostController::class, 'store']);
        // list posts
        Route::get('/', [PostController::class, 'index']);
        // show post
        Route::get('{id}', [PostController::class, 'show']);
        // update post
        Route::put('{id}', [PostController::class, 'update']);
        // delete post
        Route::delete('{id}', [PostController::class, 'delete']);
    });

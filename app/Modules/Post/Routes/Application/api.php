<?php

use Illuminate\Support\Facades\Route;
use Modules\Post\Http\Controllers\Application\PostController;

/*
|--------------------------------------------------------------------------
| Application API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'v1/posts',
    'middleware' => ['auth:user'],
], function () {
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

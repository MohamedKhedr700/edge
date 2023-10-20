<?php

use Illuminate\Support\Facades\Route;
use Modules\Category\Http\Controllers\Application\CategoryController;

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
    'prefix' => 'v1/categories',
    'middleware' => ['auth:user']
], function () {
});


Route::prefix('v1')->group(function () {
    Route::prefix('orders')->middleware(['auth:api'])->group(function () {
        Route::post('/', 'OrderController@store');
        Route::put('/', 'OrderController@pay');
        Route::get('pending', 'OrderController@getOrder');
        Route::delete('{id}', 'OrderController@delete');
    });

    Route::prefix('orders')->middleware(['auth:api,admin'])->group(function () {
        Route::get('/', 'OrderController@index');
        Route::get('{id}', 'OrderController@show');
    });
});

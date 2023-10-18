<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\Application\UserController;

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
    'prefix' => 'v1/users',
    'middleware' => ['auth:device']
], function () {
//    list users
//    Route::get('/', [UserController::class, 'index']);
});
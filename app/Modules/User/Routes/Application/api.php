<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\Application\LoginController;
use Modules\User\Http\Controllers\Application\RegisterController;

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

Route::prefix('v1/users')
//    ->middleware(['auth:user'])
    ->group(function () {
        // register user
        Route::post('register', [RegisterController::class, 'register']);
        // login user
        Route::post('login', [LoginController::class, 'login']);
    });

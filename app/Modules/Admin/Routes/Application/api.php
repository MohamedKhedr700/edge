<?php

use App\Modules\Admin\Http\Controllers\Application\LoginController;
use Illuminate\Support\Facades\Route;

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
    'prefix' => 'v1/admins',
//    'middleware' => ['auth:device']
], function () {
    Route::post('login', [LoginController::class, 'login']);
});

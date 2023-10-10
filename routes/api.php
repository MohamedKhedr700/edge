<?php

use App\Http\Controllers\GetProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// register
Route::post('register', RegisterController::class);
// login
Route::post('login', LoginController::class);
// get profile
Route::get('profile', GetProfileController::class)->middleware(['auth:user']);

// create token
Route::get('token', function () {
    $user = User::create([
        'phone' => '501010101',
        'email' => 'core@raid.com',
        'user_name' => 'raid',
        'password' => '123123123',
    ]);

    $token = $user->createToken($user->name);

    return ['token' => $token->plainTextToken];
});

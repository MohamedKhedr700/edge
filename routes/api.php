<?php

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

Route::post('posts', \App\Http\Controllers\CreatePostController::class)->middleware('auth:user');

Route::get('token', function () {
    $user = User::create([
        'name' => 'raid',
        'email' => 'core@raid.com',
        'password' => '123123123',
    ]);

    $token = $user->createToken($user->name);

    return ['token' => $token->plainTextToken];
});

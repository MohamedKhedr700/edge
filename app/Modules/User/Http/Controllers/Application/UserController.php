<?php

namespace Modules\User\Http\Controllers\Application;

use App\Modules\User\Actions\Auth\LoginUserAction;
use App\Modules\User\Actions\Auth\RegisterUserAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\User\Repositories\UserRepository;
use Raid\Core\Controller\Controllers\Controller;

class UserController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = UserRepository::class;

    /**
     * Register the user.
     */
    public function register(Request $request, RegisterUserAction $registerUserAction): JsonResponse
    {
        $user = $registerUserAction->execute($request->all());

        return $this->success('User created', [
            'user' => $user,
        ]);
    }

    /**
     * Login the user.
     */
    public function login(Request $request, LoginUserAction $loginUserAction): JsonResponse
    {
        $loginChannel = $loginUserAction->execute($request->all());

        return $this->success('User logged in', [
            'channel' => $loginChannel->channel(),
            'token' => $loginChannel->stringToken(),
            'account' => $loginChannel->account(),
            'errors' => $loginChannel->errors(),
        ]);
    }
}

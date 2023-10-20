<?php

namespace Modules\User\Http\Controllers\Application;

use App\Modules\User\Actions\Auth\LoginUserAction;
use App\Modules\User\Actions\Auth\RegisterUserAction;
use App\Modules\User\Http\Requests\LoginUserRequest;
use App\Modules\User\Http\Requests\RegisterUserRequest;
use Illuminate\Http\JsonResponse;
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
    public function register(RegisterUserRequest $request, UserRepository $user, RegisterUserAction $registerUserAction): JsonResponse
    {
        $registerUserAction->authorize();

        $user = $registerUserAction->execute($request->passed());

        return $this->success('User created', [
            'resource' => $user,
        ]);
    }

    /**
     * Login the user.
     */
    public function login(LoginUserRequest $request, LoginUserAction $loginUserAction): JsonResponse
    {
        $loginUserAction->authorize();

        $loginChannel = $loginUserAction->execute($request->passed());

        return $this->success('User logged in', [
            'channel' => $loginChannel->channel(),
            'token' => $loginChannel->stringToken(),
            'errors' => $loginChannel->errors(),
            'resource' => $loginChannel->account(),
        ]);
    }
}

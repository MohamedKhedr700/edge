<?php

namespace Modules\User\Http\Controllers\Application;

use Illuminate\Http\JsonResponse;
use Modules\User\Actions\Auth\LoginUserAction;
use Modules\User\Actions\Auth\RegisterUserAction;
use Modules\User\Http\Requests\LoginUserRequest;
use Modules\User\Http\Requests\RegisterUserRequest;
use Modules\User\Http\Transformers\UserTransformer;
use Modules\User\Repositories\UserRepository;
use Raid\Core\Controller\Controllers\Controller;

class UserController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = UserRepository::class;

    /**
     * {@inheritdoc}
     */
    public const TRANSFORMER = UserTransformer::class;

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

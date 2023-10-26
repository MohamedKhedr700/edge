<?php

namespace Modules\User\Http\Controllers\Application;

use Illuminate\Http\JsonResponse;
use Modules\User\Actions\Auth\LoginUserAction;
use Modules\User\Http\Requests\LoginUserRequest;
use Modules\User\Http\Transformers\UserTransformer;
use Modules\User\Repositories\UserRepository;
use Raid\Core\Controller\Controllers\Controller;

class LoginController extends Controller
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
     * Login the user.
     */
    public function login(LoginUserRequest $request, LoginUserAction $loginUserAction): JsonResponse
    {
        $loginUserAction->authorize();

        $authChannel = $loginUserAction->execute($request->passed());

        return $this->success('User logged in', [
            'channel' => $authChannel->channel(),
            'token' => $authChannel->stringToken(),
            'errors' => $authChannel->errors()->toArray(),
            'resource' => $this->getTransformedResource($authChannel->account()),
        ]);
    }
}

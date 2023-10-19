<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Modules\User\Actions\Auth\LoginUserAction;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;

class LoginController extends Controller
{
    /**
     * Invoke the controller method.
     *
     * @throws AuthorizationException
     */
    public function __invoke(LoginRequest $request, LoginUserAction $loginAction): JsonResponse
    {
        $loginAction->authorize();

        $authChannel = $loginAction->execute($request->validated());

        return response()->json([
            'message' => __('logged in successfully.'),
            'token' => $authChannel->stringToken(),
            'resource' => $authChannel->account()->toArray(),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Actions\LoginAction;
use App\Http\Requests\CreateRequest;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;

class LoginController
{
    /**
     * Invoke the controller method.
     *
     * @throws AuthorizationException
     */
    public function __invoke(CreateRequest $request, LoginAction $loginAction): JsonResponse
    {
        $loginAction->authorize();

        $authChannel = $loginAction->execute($request->validated());

        return response()->json([
            'message' => 'logged in successfully.',
            'token' => $authChannel->stringToken(),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Actions\RegisterAction;
use App\Http\Requests\CreateRequest;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;

class RegisterController
{
    /**
     * Invoke the controller method.
     *
     * @throws AuthorizationException
     */
    public function __invoke(CreateRequest $request, RegisterAction $registerAction): JsonResponse
    {
        $registerAction->execute($request->validated());

        return response()->json([
            'message' => 'registered successfully.',
        ]);
    }
}

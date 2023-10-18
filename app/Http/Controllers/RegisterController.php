<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Modules\User\Actions\Auth\RegisterAction;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    /**
     * Invoke the controller method.
     *
     * @throws AuthorizationException
     */
    public function __invoke(RegisterRequest $request, RegisterAction $registerAction): JsonResponse
    {
        $registerAction->authorize();

        $account = $registerAction->execute($request->validated());

        return response()->json([
            'message' => __('registered successfully.'),
            'resource' => $account->toArray(),
        ]);
    }
}

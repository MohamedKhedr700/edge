<?php

namespace App\Http\Controllers;

use App\Actions\GetProfileAction;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;

class GetProfileController extends Controller
{
    /**
     * Invoke the controller method.
     *
     * @throws AuthorizationException
     */
    public function __invoke(GetProfileAction $getProfileAction): JsonResponse
    {
        $getProfileAction->authorize();

        $account = $getProfileAction->execute();

        return response()->json([
            'message' => 'profile fetched successfully.',
            'resource' => $account->toArray(),
        ]);
    }
}

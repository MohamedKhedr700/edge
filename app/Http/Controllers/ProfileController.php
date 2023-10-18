<?php

namespace App\Http\Controllers;

use App\Modules\User\Actions\Profile\ProfileAction;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;

class ProfileController extends Controller
{
    /**
     * Invoke the controller method.
     *
     * @throws AuthorizationException
     */
    public function __invoke(ProfileAction $getProfileAction): JsonResponse
    {
        $getProfileAction->authorize();

        $account = $getProfileAction->execute();

        return response()->json([
            'message' => __('profile fetched successfully.'),
            'resource' => $account->toArray(),
        ]);
    }
}

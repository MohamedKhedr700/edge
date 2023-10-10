<?php

namespace App\Http\Controllers;

use App\Actions\CreateAction;
use App\Http\Requests\CreateRequest;
use App\Models\Post;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;

class CreateController
{
    /**
     * Invoke the controller method.
     *
     * @throws AuthorizationException
     */
    public function __invoke(CreateRequest $request, CreateAction $createPostAction): JsonResponse
    {
        $createPostAction->authorize();

        $createPostAction->execute($request->validated());

        return response()->json([
            'message' => 'Post created successfully',
        ]);
    }
}

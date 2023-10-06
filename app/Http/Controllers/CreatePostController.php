<?php

namespace App\Http\Controllers;

use App\Actions\CreatePostAction;
use App\Http\Requests\CreatePostRequest;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;

class CreatePostController
{
    /**
     * Invoke the controller method.
     *
     * @throws AuthorizationException
     */
    public function __invoke(CreatePostRequest $request, CreatePostAction $createPostAction): JsonResponse
    {
        $createPostAction->authorize();

        $createPostAction->execute($request->validated());

        return response()->json([
            'message' => 'Post created successfully',
        ]);
    }
}

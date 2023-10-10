<?php

namespace App\Http\Controllers;

use App\Actions\CreatePostAction;
use App\Http\Requests\CreateUserRequest;
use App\Models\Post;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;

class CreateUserController
{
    /**
     * Invoke the controller method.
     *
     * @throws AuthorizationException
     */
    public function __invoke(CreateUserRequest $request, CreatePostAction $createPostAction): JsonResponse
    {
        $createPostAction->authorize();

        $createPostAction->execute($request->validated());

        return response()->json([
            'message' => 'Post created successfully',
        ]);
    }
}

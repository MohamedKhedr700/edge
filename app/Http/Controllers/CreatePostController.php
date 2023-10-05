<?php

namespace App\Http\Controllers;

use App\Actions\CreatePostAction;
use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\JsonResponse;

class CreatePostController
{
    /**
     * Invoke the controller method.
     */
    public function __invoke(CreatePostRequest $request, CreatePostAction $createPostAction): JsonResponse
    {
        $createPostAction->execute($request->validated());

        return response()->json([
            'message' => 'Post created successfully',
        ]);
    }
}

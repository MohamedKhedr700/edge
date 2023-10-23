<?php

namespace App\Http\Controllers;

use App\Actions\RegisterAction;
use App\Http\Requests\RegisterRequest;
use App\Http\Transformers\UserTransformer;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Raid\Core\Controller\Controllers\Controller as RaidController;

class RegisterController extends RaidController
{
    /**
     * {@inheritdoc}
     */
    public const TRANSFORMER = UserTransformer::class;

    /**
     * Invoke the controller method.
     *
     * @throws AuthorizationException
     */
    public function __invoke(RegisterRequest $request, RegisterAction $registerAction): JsonResponse
    {
        $registerAction->authorize();

        $account = $registerAction->execute($request->validated());

        return $this->success(__('registered successfully.'), [
            'resource' => $this->getTransformedResource($account),
        ]);
    }
}

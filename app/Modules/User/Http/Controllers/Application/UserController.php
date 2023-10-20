<?php

namespace Modules\User\Http\Controllers\Application;

use Illuminate\Http\JsonResponse;
use Modules\User\Actions\Auth\LoginUserAction;
use Modules\User\Actions\Auth\RegisterUserAction;
use Modules\User\Http\Requests\LoginUserRequest;
use Modules\User\Http\Requests\RegisterUserRequest;
use Modules\User\Http\Transformers\UserTransformer;
use Modules\User\Repositories\UserRepository;
use Raid\Core\Controller\Controllers\Controller;

class UserController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = UserRepository::class;

    /**
     * {@inheritdoc}
     */
    public const TRANSFORMER = UserTransformer::class;
}

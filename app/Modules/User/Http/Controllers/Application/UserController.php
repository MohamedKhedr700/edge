<?php

namespace Modules\User\Http\Controllers\Application;

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

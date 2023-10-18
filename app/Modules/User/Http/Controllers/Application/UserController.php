<?php

namespace Modules\User\Http\Controllers\Application;

use Modules\Core\Http\Controllers\ApiController;
use Modules\User\Repositories\UserRepository;

class UserController extends ApiController
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = UserRepository::class;
}

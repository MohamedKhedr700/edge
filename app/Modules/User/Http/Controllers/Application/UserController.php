<?php

namespace Modules\User\Http\Controllers\Application;

use Raid\Core\Controller\Controllers\Controller;
use Modules\User\Repositories\UserRepository;

class UserController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = UserRepository::class;
}

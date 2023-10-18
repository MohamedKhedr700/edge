<?php

namespace Modules\User\Services;

use Modules\Core\Services\ApiService;
use Modules\Core\Services\Contracts\ServiceInterface;
use Modules\User\Repositories\UserRepository;

class UserService extends ApiService implements ServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = UserRepository::class;
}

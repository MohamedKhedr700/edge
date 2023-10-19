<?php

namespace Modules\User\Services;

use Modules\User\Repositories\UserRepository;
use Raid\Core\Repository\Services\ActionService;
use Raid\Core\Repository\Services\Contracts\ActionServiceInterface;

class UserService extends ActionService implements ActionServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = UserRepository::class;
}

<?php

namespace Modules\User\Repositories;

use Modules\User\Repositories\Contracts\UserRepositoryInterface;
use Modules\User\Utilities\UserUtility;
use Raid\Core\Repository\Repositories\Repository;

class UserRepository extends Repository implements UserRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public const UTILITY = UserUtility::class;
}

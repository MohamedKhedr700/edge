<?php

namespace Modules\User\Repositories;

use Modules\User\Repositories\Contracts\UserRepositoryInterface;
use Raid\Core\Repository\Repositories\Repository;
use Modules\User\Utilities\UserUtility;

class UserRepository extends Repository implements UserRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public const UTILITY = UserUtility::class;
}
<?php

namespace Modules\User\Repositories;

use Modules\User\Repositories\Contracts\UserRepositoryInterface;
use Modules\Core\Repositories\ApiRepository;
use Modules\User\Utilities\UserUtility;

class UserRepository extends ApiRepository implements UserRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public const UTILITY = UserUtility::class;
}
<?php

namespace Modules\User\Repositories;

use Modules\User\Repositories\Contracts\UserRepositoryInterface;
use Modules\User\Utilities\UserUtility;
use Raid\Core\Auth\Authentication\Contracts\AuthenticatableInterface;
use Raid\Core\Auth\Traits\Model\Authenticatable;
use Raid\Core\Repository\Repositories\Repository;

class UserRepository extends Repository implements AuthenticatableInterface, UserRepositoryInterface
{
    use Authenticatable;

    /**
     * {@inheritdoc}
     */
    public const UTILITY = UserUtility::class;

    /**
     * {@inheritdoc}
     */
    public static function getAuthenticator(): string
    {
        return static::utility()::getAuthenticator();
    }
}

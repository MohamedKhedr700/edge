<?php

namespace Modules\Admin\Repositories;

use Modules\Admin\Repositories\Contracts\AdminRepositoryInterface;
use Modules\Admin\Utilities\AdminUtility;
use Raid\Core\Auth\Authentication\Contracts\AuthenticatableInterface;
use Raid\Core\Auth\Traits\Model\Authenticatable;
use Raid\Core\Repository\Repositories\Repository;

class AdminRepository extends Repository implements AdminRepositoryInterface, AuthenticatableInterface
{
    use Authenticatable;

    /**
     * {@inheritdoc}
     */
    public const UTILITY = AdminUtility::class;

    /**
     * Get repository authenticator.
     */
    public static function getAuthenticator(): string
    {
        return static::utility()::getAuthenticator();
    }
}
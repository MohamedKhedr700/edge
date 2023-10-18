<?php

namespace App\Repositories;

use App\Utilities\UserUtility;
use Raid\Core\Auth\Authentication\Contracts\AuthenticatableInterface;
use Raid\Core\Auth\Traits\Model\Authenticatable;
use Raid\Core\Repository\Repositories\Contracts\RepositoryInterface;
use Raid\Core\Repository\Repositories\Repository;

class UserRepository extends Repository implements AuthenticatableInterface, RepositoryInterface
{
    use Authenticatable;

    /**
     * {@inheritdoc}
     */
    public const UTILITY = UserUtility::class;
}

<?php

namespace App\Repositories;

use App\Utilities\UserUtility;
use Raid\Core\Repository\Repositories\Contracts\RepositoryInterface;
use Raid\Core\Repository\Repositories\Repository;

class UserRepository extends Repository implements RepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public const UTILITY = UserUtility::class;
}

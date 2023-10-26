<?php

namespace Modules\Post\Repositories;

use Modules\Post\Repositories\Contracts\PostRepositoryInterface;
use Modules\Post\Utilities\PostUtility;
use Raid\Core\Repository\Repositories\Repository;

class PostRepository extends Repository implements PostRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public const UTILITY = PostUtility::class;
}

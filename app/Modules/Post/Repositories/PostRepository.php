<?php

namespace Modules\Post\Repositories;

use Modules\Post\Repositories\Contracts\PostRepositoryInterface;
use Raid\Core\Repository\Repositories\Repository;
use Modules\Post\Utilities\PostUtility;

class PostRepository extends Repository implements PostRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public const UTILITY = PostUtility::class;
}
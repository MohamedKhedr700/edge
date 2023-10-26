<?php

namespace Modules\Category\Repositories;

use Modules\Category\Repositories\Contracts\CategoryRepositoryInterface;
use Modules\Category\Utilities\CategoryUtility;
use Raid\Core\Repository\Repositories\Repository;

class CategoryRepository extends Repository implements CategoryRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public const UTILITY = CategoryUtility::class;
}

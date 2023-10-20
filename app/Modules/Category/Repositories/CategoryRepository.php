<?php

namespace Modules\Category\Repositories;

use Modules\Category\Utilities\CategoryUtility;
use Raid\Core\Repository\Repositories\Repository;
use Modules\Category\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryRepository extends Repository implements CategoryRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public const UTILITY = CategoryUtility::class;
}
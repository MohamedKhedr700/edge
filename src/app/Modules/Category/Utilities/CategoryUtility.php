<?php

namespace Modules\Category\Utilities;

use Modules\Category\Utilities\Contracts\CategoryUtilityInterface;
use Raid\Core\Repository\Utilities\Utility;

class CategoryUtility extends Utility implements CategoryUtilityInterface
{
    /**
     * {@inheritdoc}
     */
    public const MODULE_LOWER = 'category';

    /**
     * {@inheritdoc}
     */
    public const MODULE_UPPER = 'Category';
}

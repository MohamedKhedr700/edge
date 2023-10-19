<?php

namespace Modules\Category\Utilities;

use Raid\Core\Repository\Utilities\Utility;
use Modules\Category\Utilities\Contracts\CategoryUtilityInterface;
use Modules\Category\Models\Category;
use Modules\Category\Repositories\CategoryRepository;
use Modules\Category\Http\Transformers\CategoryTransformer;
use Modules\Category\Providers\RouteServiceProvider;

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

    /**
     * {@inheritdoc}
     */
    public const MODEL = Category::class;

    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = CategoryRepository::class;

    /**
     * {@inheritdoc}
     */
    public const TRANSFORMER = CategoryTransformer::class;

    /**
     * {@inheritdoc}
     */
    public const ROUTE_SERVICE_PROVIDER = RouteServiceProvider::class;
}

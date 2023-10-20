<?php

namespace Modules\Category\Http\Controllers\Application;

use Modules\Category\Http\Transformers\CategoryTransformer;
use Modules\Category\Repositories\CategoryRepository;
use Raid\Core\Controller\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = CategoryRepository::class;

    /**
     * {@inheritdoc}
     */
    public const TRANSFORMER = CategoryTransformer::class;
}

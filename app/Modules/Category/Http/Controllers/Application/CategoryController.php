<?php

namespace Modules\Category\Http\Controllers\Application;

use Raid\Core\Controller\Controllers\Controller;
use Modules\Category\Repositories\CategoryRepository;
use Modules\Category\Http\Transformers\CategoryTransformer;

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

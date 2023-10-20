<?php

namespace Modules\Category\Http\Controllers\Application;

use Raid\Core\Controller\Controllers\Controller;
use Modules\Category\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = CategoryRepository::class;
}

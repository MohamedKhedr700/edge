<?php

namespace Modules\Product\Http\Controllers\Application;

use Raid\Core\Controller\Controllers\Controller;
use Modules\Product\Repositories\ProductRepository;

class ProductController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = ProductRepository::class;
}

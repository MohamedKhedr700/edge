<?php

namespace Modules\Product\Http\Controllers\Application;

use Modules\Product\Repositories\ProductRepository;
use Raid\Core\Controller\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = ProductRepository::class;
}

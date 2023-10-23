<?php

namespace Modules\Product\Repositories;

use Modules\Product\Repositories\Contracts\ProductRepositoryInterface;
use Modules\Product\Utilities\ProductUtility;
use Raid\Core\Repository\Repositories\Repository;

class ProductRepository extends Repository implements ProductRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public const UTILITY = ProductUtility::class;
}

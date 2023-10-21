<?php

namespace Modules\Product\Utilities;

use Modules\Product\Utilities\Contracts\ProductUtilityInterface;
use Raid\Core\Repository\Utilities\Utility;

class ProductUtility extends Utility implements ProductUtilityInterface
{
    /**
     * {@inheritdoc}
     */
    public const MODULE_LOWER = 'product';

    /**
     * {@inheritdoc}
     */
    public const MODULE_UPPER = 'Product';
}

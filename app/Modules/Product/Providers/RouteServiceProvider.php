<?php

namespace Modules\Product\Providers;

use Modules\Product\Utilities\ProductUtility;
use Raid\Core\Modules\Providers\RouteServiceProvider as RaidRouteServiceProvider;

class RouteServiceProvider extends RaidRouteServiceProvider
{
    /**
     * @inheritdoc
     */
    public const MODULE = ProductUtility::MODULE_UPPER;
}

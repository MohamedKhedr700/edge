<?php

namespace Modules\Category\Providers;

use Modules\Category\Utilities\CategoryUtility;
use Raid\Core\Modules\Providers\RouteServiceProvider as RaidRouteServiceProvider;

class RouteServiceProvider extends RaidRouteServiceProvider
{
    /**
     * @inheritdoc
     */
    public const MODULE = CategoryUtility::MODULE_UPPER;
}

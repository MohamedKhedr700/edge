<?php

namespace Modules\Admin\Providers;

use Modules\Admin\Utilities\AdminUtility;
use Raid\Core\Modules\Providers\RouteServiceProvider as RaidRouteServiceProvider;

class RouteServiceProvider extends RaidRouteServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public const MODULE = AdminUtility::MODULE_UPPER;
}

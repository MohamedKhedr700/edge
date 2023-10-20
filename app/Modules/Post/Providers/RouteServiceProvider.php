<?php

namespace Modules\Post\Providers;

use Modules\Post\Utilities\PostUtility;
use Raid\Core\Modules\Providers\RouteServiceProvider as RaidRouteServiceProvider;

class RouteServiceProvider extends RaidRouteServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public const MODULE = PostUtility::MODULE_UPPER;
}

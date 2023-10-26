<?php

namespace Modules\User\Providers;

use Modules\User\Utilities\UserUtility;
use Raid\Core\Modules\Providers\RouteServiceProvider as RaidRouteServiceProvider;

class RouteServiceProvider extends RaidRouteServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public const MODULE = UserUtility::MODULE_UPPER;
}

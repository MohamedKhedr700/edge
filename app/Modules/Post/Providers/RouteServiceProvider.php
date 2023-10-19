<?php

namespace Modules\Post\Providers;

use Raid\Core\Modules\Providers\RouteServiceProvider as RaidRouteServiceProvider;

class RouteServiceProvider extends RaidRouteServiceProvider
{
    /**
     * @inheritdoc
     */
    public const SERVICE_PROVIDER = PostServiceProvider::class;
}

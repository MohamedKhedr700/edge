<?php

namespace Modules\Admin\Providers;

use Modules\Admin\Repositories\AdminRepository;
use Raid\Core\Modules\Providers\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = AdminRepository::class;

    /**
     * {@inheritdoc}
     */
    public const ROUTE_SERVICE_PROVIDER = RouteServiceProvider::class;
}

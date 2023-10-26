<?php

namespace Modules\User\Providers;

use Modules\User\Repositories\UserRepository;
use Raid\Core\Modules\Providers\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = UserRepository::class;

    /**
     * {@inheritdoc}
     */
    public const ROUTE_SERVICE_PROVIDER = RouteServiceProvider::class;
}

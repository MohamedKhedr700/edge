<?php

namespace Modules\Category\Providers;

use Modules\Category\Repositories\CategoryRepository;
use Raid\Core\Modules\Providers\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = CategoryRepository::class;

    /**
     * {@inheritdoc}
     */
    public const ROUTE_SERVICE_PROVIDER = RouteServiceProvider::class;
}
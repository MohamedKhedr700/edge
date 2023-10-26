<?php

namespace Modules\Product\Providers;

use Modules\Product\Repositories\ProductRepository;
use Raid\Core\Modules\Providers\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = ProductRepository::class;

    /**
     * {@inheritdoc}
     */
    public const ROUTE_SERVICE_PROVIDER = RouteServiceProvider::class;
}

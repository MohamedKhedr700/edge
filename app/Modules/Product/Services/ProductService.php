<?php

namespace Modules\Product\Services;

use Modules\Product\Repositories\ProductRepository;
use Raid\Core\Repository\Services\ActionService;
use Raid\Core\Repository\Services\Contracts\ActionServiceInterface;

class ProductService extends ActionService implements ActionServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = ProductRepository::class;
}

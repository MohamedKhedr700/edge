<?php

namespace Modules\Product\Actions\Crud;

use Modules\Product\Repositories\ProductRepository;
use Raid\Core\Action\Actions\Contracts\Crud\FindByActionInterface;
use Raid\Core\Action\Actions\Crud\FindByAction;

class FindByProductAction extends FindByAction implements FindByActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = ProductRepository::class;
}

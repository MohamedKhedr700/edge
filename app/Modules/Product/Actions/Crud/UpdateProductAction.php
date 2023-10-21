<?php

namespace Modules\Product\Actions\Crud;

use Modules\Product\Repositories\ProductRepository;
use Raid\Core\Action\Actions\Contracts\Crud\UpdateActionInterface;
use Raid\Core\Action\Actions\Crud\UpdateAction;

class UpdateProductAction extends UpdateAction implements UpdateActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = ProductRepository::class;
}

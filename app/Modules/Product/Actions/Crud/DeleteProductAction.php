<?php

namespace Modules\Product\Actions\Crud;

use Modules\Product\Repositories\ProductRepository;
use Raid\Core\Action\Actions\Contracts\Crud\DeleteActionInterface;
use Raid\Core\Action\Actions\Crud\DeleteAction;

class DeleteProductAction extends DeleteAction implements DeleteActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = ProductRepository::class;
}

<?php

namespace Modules\Product\Actions\Crud;

use Modules\Product\Repositories\ProductRepository;
use Raid\Core\Action\Actions\Contracts\Crud\FindActionInterface;
use Raid\Core\Action\Actions\Crud\FindAction;

class FindProductAction extends FindAction implements FindActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = ProductRepository::class;
}

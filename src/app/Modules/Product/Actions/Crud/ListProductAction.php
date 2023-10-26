<?php

namespace Modules\Product\Actions\Crud;

use Modules\Product\Repositories\ProductRepository;
use Raid\Core\Action\Actions\Contracts\Crud\ListActionInterface;
use Raid\Core\Action\Actions\Crud\ListAction;

class ListProductAction extends ListAction implements ListActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = ProductRepository::class;
}

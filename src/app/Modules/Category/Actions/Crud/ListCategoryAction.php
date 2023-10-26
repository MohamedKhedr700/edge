<?php

namespace Modules\Category\Actions\Crud;

use Modules\Category\Repositories\CategoryRepository;
use Raid\Core\Action\Actions\Contracts\Crud\ListActionInterface;
use Raid\Core\Action\Actions\Crud\ListAction;

class ListCategoryAction extends ListAction implements ListActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = CategoryRepository::class;
}

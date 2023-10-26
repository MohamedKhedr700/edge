<?php

namespace Modules\Category\Actions\Crud;

use Modules\Category\Repositories\CategoryRepository;
use Raid\Core\Action\Actions\Contracts\Crud\FindByActionInterface;
use Raid\Core\Action\Actions\Crud\FindByAction;

class FindByCategoryAction extends FindByAction implements FindByActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = CategoryRepository::class;
}

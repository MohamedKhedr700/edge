<?php

namespace Modules\Category\Actions\Crud;

use Modules\Category\Repositories\CategoryRepository;
use Raid\Core\Action\Actions\Contracts\Crud\FindActionInterface;
use Raid\Core\Action\Actions\Crud\FindAction;

class FindCategoryAction extends FindAction implements FindActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = CategoryRepository::class;
}

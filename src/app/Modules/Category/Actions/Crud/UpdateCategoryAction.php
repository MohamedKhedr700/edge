<?php

namespace Modules\Category\Actions\Crud;

use Modules\Category\Repositories\CategoryRepository;
use Raid\Core\Action\Actions\Contracts\Crud\UpdateActionInterface;
use Raid\Core\Action\Actions\Crud\UpdateAction;

class UpdateCategoryAction extends UpdateAction implements UpdateActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = CategoryRepository::class;
}

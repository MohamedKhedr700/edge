<?php

namespace Modules\Category\Actions\Crud;

use Modules\Category\Repositories\CategoryRepository;
use Raid\Core\Action\Actions\Contracts\Crud\DeleteActionInterface;
use Raid\Core\Action\Actions\Crud\DeleteAction;

class DeleteCategoryAction extends DeleteAction implements DeleteActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = CategoryRepository::class;
}

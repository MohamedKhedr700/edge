<?php

namespace Modules\Admin\Actions\Crud;

use Modules\Admin\Repositories\AdminRepository;
use Raid\Core\Action\Actions\Contracts\Crud\FindByActionInterface;
use Raid\Core\Action\Actions\Crud\FindByAction;

class FindByAdminAction extends FindByAction implements FindByActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = AdminRepository::class;
}

<?php

namespace Modules\Admin\Actions\Crud;

use Modules\Admin\Repositories\AdminRepository;
use Raid\Core\Action\Actions\Contracts\Crud\UpdateActionInterface;
use Raid\Core\Action\Actions\Crud\UpdateAction;

class UpdateAdminAction extends UpdateAction implements UpdateActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = AdminRepository::class;
}

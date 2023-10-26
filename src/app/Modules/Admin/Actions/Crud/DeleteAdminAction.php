<?php

namespace Modules\Admin\Actions\Crud;

use Modules\Admin\Repositories\AdminRepository;
use Raid\Core\Action\Actions\Contracts\Crud\DeleteActionInterface;
use Raid\Core\Action\Actions\Crud\DeleteAction;

class DeleteAdminAction extends DeleteAction implements DeleteActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = AdminRepository::class;
}

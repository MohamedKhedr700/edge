<?php

namespace Modules\Admin\Actions\Crud;

use Modules\Admin\Repositories\AdminRepository;
use Raid\Core\Action\Actions\Contracts\Crud\ListActionInterface;
use Raid\Core\Action\Actions\Crud\ListAction;

class ListAdminAction extends ListAction implements ListActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = AdminRepository::class;
}

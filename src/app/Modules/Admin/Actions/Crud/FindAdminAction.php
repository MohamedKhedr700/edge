<?php

namespace Modules\Admin\Actions\Crud;

use Modules\Admin\Repositories\AdminRepository;
use Raid\Core\Action\Actions\Contracts\Crud\FindActionInterface;
use Raid\Core\Action\Actions\Crud\FindAction;

class FindAdminAction extends FindAction implements FindActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = AdminRepository::class;
}

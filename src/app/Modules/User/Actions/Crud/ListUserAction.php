<?php

namespace Modules\User\Actions\Crud;

use Modules\User\Repositories\UserRepository;
use Raid\Core\Action\Actions\Contracts\Crud\ListActionInterface;
use Raid\Core\Action\Actions\Crud\ListAction;

class ListUserAction extends ListAction implements ListActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = UserRepository::class;
}

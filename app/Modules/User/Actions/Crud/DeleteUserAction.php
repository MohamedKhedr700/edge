<?php

namespace Modules\User\Actions\Crud;

use Modules\User\Repositories\UserRepository;
use Raid\Core\Action\Actions\Contracts\Crud\DeleteActionInterface;
use Raid\Core\Action\Actions\Crud\DeleteAction;

class DeleteUserAction extends DeleteAction implements DeleteActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = UserRepository::class;
}

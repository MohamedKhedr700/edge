<?php

namespace Modules\User\Actions\Crud;

use Modules\User\Repositories\UserRepository;
use Raid\Core\Action\Actions\Contracts\Crud\UpdateActionInterface;
use Raid\Core\Action\Actions\Crud\UpdateAction;

class UpdateUserAction extends UpdateAction implements UpdateActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = UserRepository::class;
}

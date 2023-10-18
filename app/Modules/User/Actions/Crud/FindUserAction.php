<?php

namespace Modules\User\Actions\Crud;

use Modules\User\Repositories\UserRepository;
use Raid\Core\Action\Actions\Contracts\Crud\FindActionInterface;
use Raid\Core\Action\Actions\Crud\FindAction;

class FindUserAction extends FindAction implements FindActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = UserRepository::class;
}

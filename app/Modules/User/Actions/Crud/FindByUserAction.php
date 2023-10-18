<?php

namespace Modules\User\Actions\Crud;

use Modules\User\Repositories\UserRepository;
use Raid\Core\Action\Actions\Contracts\Crud\FindByActionInterface;
use Raid\Core\Action\Actions\Crud\FindByAction;

class FindByUserAction extends FindByAction implements FindByActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = UserRepository::class;
}

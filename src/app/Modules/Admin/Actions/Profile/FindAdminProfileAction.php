<?php

namespace Modules\Admin\Actions\Profile;

use Modules\Admin\Repositories\AdminRepository;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;
use Raid\Core\Enum\Enums\Action as ActionEnum;

class FindAdminProfileAction extends Action implements ActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTION = ActionEnum::FIND_PROFILE;

    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = AdminRepository::class;

    /**
     * Handle the action.
     */
    public function handle(): AccountInterface
    {
        return account();
    }
}

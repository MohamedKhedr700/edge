<?php

namespace App\Modules\User\Actions\Profile;

use Modules\User\Repositories\UserRepository;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;
use Raid\Core\Enum\Enums\Action as ActionEnum;

class ProfileAction extends Action implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::FIND_PROFILE;

    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = UserRepository::class;

    /**
     * Handle the action.
     */
    public function handle(): AccountInterface
    {
        return account();
    }
}

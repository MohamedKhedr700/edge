<?php

namespace App\Modules\User\Actions\Profile;

use App\Models\User;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;

class ProfileAction extends Action implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = 'profile';

    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = User::class;

    /**
     * Handle the action.
     */
    public function handle(): AccountInterface
    {
        return account();
    }
}

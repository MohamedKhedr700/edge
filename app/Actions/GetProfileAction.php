<?php

namespace App\Actions;

use App\Models\User;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;

class GetProfileAction extends Action implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = 'get_profile';

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

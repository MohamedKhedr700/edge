<?php

namespace App\Actions;

use App\Models\User;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;

class LoginAction extends Action implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = 'login';

    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = User::class;

    /**
     * Handle the action.
     */
    public function handle(array $credentials)
    {
    }
}

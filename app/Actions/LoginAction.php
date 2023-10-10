<?php

namespace App\Actions;

use App\Http\Authentication\Authenticator\UserAuthenticator;
use App\Models\User;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Auth\Authentication\Contracts\AuthChannelInterface;

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
    public function handle(array $credentials): AuthChannelInterface
    {
        return UserAuthenticator::attempt($credentials);
    }
}

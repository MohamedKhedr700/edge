<?php

namespace App\Modules\User\Actions\Auth;

use Modules\User\Http\Authentication\UserAuthenticator;
use Modules\User\Repositories\UserRepository;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Auth\Authentication\Contracts\AuthChannelInterface;

class LoginUserAction extends Action implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = 'login';

    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = UserRepository::class;

    /**
     * Handle the action.
     */
    public function handle(array $credentials): AuthChannelInterface
    {
        return UserAuthenticator::attempt($credentials);
    }
}

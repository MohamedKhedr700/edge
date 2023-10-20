<?php

namespace Modules\User\Actions\Auth;

use Modules\Core\Authentication\Channels\OtpAuthChannel;
use Modules\User\Http\Authentication\Authenticators\UserAuthenticator;
use Modules\User\Repositories\UserRepository;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Auth\Authentication\Contracts\AuthChannelInterface;
use Raid\Core\Auth\Exceptions\Authentication\InvalidChannelException;
use Raid\Core\Enum\Enums\Action as ActionEnum;

class LoginUserAction extends Action implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::LOGIN;

    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = UserRepository::class;

    /**
     * Handle the action.
     *
     * @throws InvalidChannelException
     */
    public function handle(array $credentials): AuthChannelInterface
    {
        return UserAuthenticator::attempt($credentials);
    }
}

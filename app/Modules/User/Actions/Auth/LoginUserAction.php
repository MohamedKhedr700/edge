<?php

namespace Modules\User\Actions\Auth;

use Modules\User\Repositories\UserRepository;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Action\Exceptions\Actionable\InvalidActionableException;
use Raid\Core\Auth\Authentication\Contracts\AuthChannelInterface;
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
     * @throws InvalidActionableException
     */
    public function handle(array $credentials): AuthChannelInterface
    {
        return $this->actionable()->attempt($credentials);
    }
}

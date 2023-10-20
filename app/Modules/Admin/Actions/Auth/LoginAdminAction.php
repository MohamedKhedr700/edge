<?php

namespace App\Modules\Admin\Actions\Auth;

use Modules\Admin\Http\Authentication\Authenticators\AdminAuthenticator;
use Modules\Admin\Repositories\AdminRepository;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Auth\Authentication\Contracts\AuthChannelInterface;
use Raid\Core\Auth\Exceptions\Authentication\InvalidChannelException;
use Raid\Core\Enum\Enums\Action as ActionEnum;

class LoginAdminAction extends Action implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::LOGIN;

    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = AdminRepository::class;

    /**
     * Handle the action.
     *
     * @throws InvalidChannelException
     */
    public function handle(array $credentials): AuthChannelInterface
    {
        return AdminAuthenticator::attempt($credentials);
    }
}

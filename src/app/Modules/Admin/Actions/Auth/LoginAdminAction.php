<?php

namespace Modules\Admin\Actions\Auth;

use Modules\Admin\Models\Admin;
use Modules\Admin\Repositories\AdminRepository;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Action\Exceptions\Actionable\InvalidActionableException;
use Raid\Core\Auth\Authentication\Contracts\AuthChannelInterface;
use Raid\Core\Enum\Enums\Action as ActionEnum;
use Raid\Core\Model\Models\TransparentModel;

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
     * @throws InvalidActionableException
     */
    public function handle(array $credentials): AuthChannelInterface
    {
        return $this->actionable()->attempt($credentials);
    }
}

<?php

namespace Modules\User\Actions\Auth;

use Exception;
use Modules\User\Models\User;
use Modules\User\Repositories\UserRepository;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Enum\Enums\Action as ActionEnum;

class RegisterUserAction extends Action implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::REGISTER;

    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = UserRepository::class;

    /**
     * Handle the action.
     *
     * @throws Exception
     */
    public function handle(array $data = []): User
    {
        return $this->actionable()->create($data);
    }
}

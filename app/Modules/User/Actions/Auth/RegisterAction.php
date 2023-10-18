<?php

namespace App\Modules\User\Actions\Auth;

use Exception;
use Modules\User\Models\User;
use Modules\User\Repositories\UserRepository;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;

class RegisterAction extends Action implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = 'register';

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

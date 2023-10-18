<?php

namespace App\Actions;

use App\Models\User;
use App\Repositories\UserRepository;
use Exception;
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

<?php

namespace App\Actions;

use App\Models\User;
use Exception;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;

class CreateAction extends Action implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = 'create';

    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = User::class;

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

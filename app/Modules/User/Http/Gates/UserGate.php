<?php

namespace Modules\User\Http\Gates;

use Modules\User\Models\User;
use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;
use Raid\Core\Gate\Gates\Contracts\GateInterface;
use Raid\Core\Gate\Gates\Gate;

class UserGate extends Gate implements GateInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTIONS = [
        'create',
        'list',
        'find',
        'update',
        'delete',
    ];

    /**
     * Determine whether the account can create a user.
     */
    public function create(AccountInterface $account): bool
    {
        return true;
    }

    /**
     * Determine whether the account can list users.
     */
    public function list(AccountInterface $account): bool
    {
        return true;
    }

    /**
     * Determine whether the account can find a user.
     */
    public function find(AccountInterface $account, User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the account can update a user.
     */
    public function update(AccountInterface $account, User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the account can delete a user.
     */
    public function delete(AccountInterface $account, User $user): bool
    {
        return true;
    }
}

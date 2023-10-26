<?php

namespace Modules\Admin\Http\Gates;

use Modules\Admin\Models\Admin;
use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;
use Raid\Core\Gate\Gates\Contracts\GateInterface;
use Raid\Core\Gate\Gates\Gate;

class AdminGate extends Gate implements GateInterface
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
     * Determine whether the account can create a admin.
     */
    public function create(AccountInterface $account): bool
    {
        return true;
    }

    /**
     * Determine whether the account can list admins.
     */
    public function list(AccountInterface $account): bool
    {
        return true;
    }

    /**
     * Determine whether the account can find a admin.
     */
    public function find(AccountInterface $account, Admin $admin): bool
    {
        return true;
    }

    /**
     * Determine whether the account can update a admin.
     */
    public function update(AccountInterface $account, Admin $admin): bool
    {
        return true;
    }

    /**
     * Determine whether the account can delete a admin.
     */
    public function delete(AccountInterface $account, Admin $admin): bool
    {
        return true;
    }
}

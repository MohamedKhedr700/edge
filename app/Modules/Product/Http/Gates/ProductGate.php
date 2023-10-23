<?php

namespace Modules\Product\Http\Gates;

use Modules\Product\Models\Product;
use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;
use Raid\Core\Gate\Gates\Contracts\GateInterface;
use Raid\Core\Gate\Gates\Gate;

class ProductGate extends Gate implements GateInterface
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
     * Determine whether the account can create a resource.
     */
    public function create(AccountInterface $account): bool
    {
        return true;
    }

    /**
     * Determine whether the account can list resources.
     */
    public function list(AccountInterface $account): bool
    {
        return true;
    }

    /**
     * Determine whether the account can find a resource.
     */
    public function find(AccountInterface $account, Product $product): bool
    {
        return true;
    }

    /**
     * Determine whether the account can update a resource.
     */
    public function update(AccountInterface $account, Product $product): bool
    {
        return true;
    }

    /**
     * Determine whether the account can delete a resource.
     */
    public function delete(AccountInterface $account, Product $product): bool
    {
        return true;
    }
}

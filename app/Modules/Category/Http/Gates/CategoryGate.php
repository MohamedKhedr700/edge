<?php

namespace Modules\Category\Http\Gates;

use Modules\Category\Models\Category;
use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;
use Raid\Core\Gate\Gates\Contracts\GateInterface;
use Raid\Core\Gate\Gates\Gate;

class CategoryGate extends Gate implements GateInterface
{
    /**
     * Determine whether the account can create a category.
     */
    public function create(AccountInterface $account): bool
    {
        return true;
    }

    /**
     * Determine whether the account can list categorys.
     */
    public function list(AccountInterface $account): bool
    {
        return true;
    }

    /**
     * Determine whether the account can find a category.
     */
    public function find(AccountInterface $account, Category $category): bool
    {
        return true;
    }

    /**
     * Determine whether the account can update a category.
     */
    public function update(AccountInterface $account, Category $category): bool
    {
        return true;
    }

    /**
     * Determine whether the account can delete a category.
     */
    public function delete(AccountInterface $account, Category $category): bool
    {
        return true;
    }
}

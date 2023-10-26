<?php

namespace Modules\Post\Http\Gates;

use Modules\Post\Models\Post;
use Modules\User\Models\User;
use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;
use Raid\Core\Gate\Gates\Contracts\GateInterface;
use Raid\Core\Gate\Gates\Gate;

class PostGate extends Gate implements GateInterface
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
     * Determine whether the account can create a post.
     */
    public function create(User $account): bool
    {
        return $account->isSubscribed() || $account->isPremiumSubscribed();
    }

    /**
     * Determine whether the account can list posts.
     */
    public function list(AccountInterface $account): bool
    {
        return true;
    }

    /**
     * Determine whether the account can find a post.
     */
    public function find(AccountInterface $account, Post $post): bool
    {
        return true;
    }

    /**
     * Determine whether the account can update a post.
     */
    public function update(AccountInterface $account, Post $post): bool
    {
        return true;
    }

    /**
     * Determine whether the account can delete a post.
     */
    public function delete(AccountInterface $account, Post $post): bool
    {
        return true;
    }
}
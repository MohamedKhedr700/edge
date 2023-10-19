<?php

namespace Modules\User\Models;

use Modules\User\Models\ModelFilter\UserFilter;
use Raid\Core\Auth\Models\Authentication\Account;
use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;

class User extends Account implements AccountInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACCOUNT_TYPE = 'user';

    /**
     * {@inheritdoc}
     */
    protected string $filter = UserFilter::class;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'is_subscribed', 'is_premium_subscribed',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'is_subscribed' => 'boolean',
        'is_premium_subscribed' => 'boolean',
    ];

    /**
     * Determine whether the account is subscribed.
     */
    public function subscribed(): bool
    {
        return $this->attribute('subscribed', false);
    }

    /**
     * Determine whether the account is premium subscribed.
     */
    public function premiumSubscribed(): bool
    {
        return $this->attribute('premium_subscribed', false);
    }
}

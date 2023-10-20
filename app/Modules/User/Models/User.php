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
        'username', 'email', 'phone', 'password',
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
    public function isSubscribed(): bool
    {
        return (bool) $this->attribute('is_subscribed', true);
    }

    /**
     * Determine whether the account is premium subscribed.
     */
    public function isPremiumSubscribed(): bool
    {
        return (bool) $this->attribute('is_premium_subscribed', true);
    }

    /**
     * Determine whether the account is verified email.
     */
    public function verifiedPhone(): bool
    {
        return (bool) $this->attribute('verified_phone', true);
    }
}

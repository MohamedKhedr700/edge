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
    protected string $filter = UserFilter::class;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        //
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'created_at' => 'datetime',
    ];
}

<?php

namespace Modules\Admin\Models;

use Modules\Admin\Models\ModelFilter\AdminFilter;
use Raid\Core\Auth\Models\Authentication\Account;
use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;

class Admin extends Account implements AccountInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACCOUNT_TYPE = 'admin';

    /**
     * {@inheritdoc}
     */
    protected string $filter = AdminFilter::class;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password',
    ];
}

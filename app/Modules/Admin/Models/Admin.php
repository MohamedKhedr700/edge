<?php

namespace Modules\Admin\Models;

use Modules\Admin\Models\ModelFilter\AdminFilter;
use Raid\Core\Auth\Models\Authentication\Account;
use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;
use Raid\Core\Model\Models\Model;

class Admin extends Account implements AccountInterface
{
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

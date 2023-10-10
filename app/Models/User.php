<?php

namespace App\Models;

use App\Models\ModelFilters\UserFilter;
use Raid\Core\Auth\Authentication\Contracts\AuthenticatableInterface;
use Raid\Core\Auth\Models\Authentication\Account;
use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;
use Raid\Core\Auth\Traits\Model\Authenticatable;
use Raid\Core\Event\Traits\Event\Eventable;
use Raid\Core\Gate\Traits\Gate\Gateable;

class User extends Account implements AccountInterface, AuthenticatableInterface
{
    use Authenticatable;
    use Eventable;
    use Gateable;

    /**
     * {@inheritdoc}
     */
    protected string $filter = UserFilter::class;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get eventable events.
     */
    public static function getEvents(): array
    {
        return [];
    }

    /**
     * Get gateable gates.
     */
    public static function getGates(): array
    {
        return [];
    }
}

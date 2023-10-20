<?php

namespace App\Modules\Core\Authentication\Enums;

use Raid\Core\Enum\Enums\Enum;

class Authenticator extends Enum
{
    /**
     * Admin authenticator.
     */
    public const ADMIN = 'admin';

    /**
     * User authenticator.
     */
    public const USER = 'user';
}

<?php

namespace Modules\User\Utilities;

use Modules\User\Utilities\Contracts\UserUtilityInterface;
use Raid\Core\Repository\Utilities\Utility;

class UserUtility extends Utility implements UserUtilityInterface
{
    /**
     * {@inheritdoc}
     */
    public const MODULE_LOWER = 'user';

    /**
     * {@inheritdoc}
     */
    public const MODULE_UPPER = 'User';
}

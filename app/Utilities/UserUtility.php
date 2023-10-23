<?php

namespace App\Utilities;

use Raid\Core\Repository\Utilities\Contracts\UtilityInterface;
use Raid\Core\Repository\Utilities\Utility;

class UserUtility extends Utility implements UtilityInterface
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

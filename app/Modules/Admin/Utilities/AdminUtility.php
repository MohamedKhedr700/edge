<?php

namespace Modules\Admin\Utilities;

use Modules\Admin\Utilities\Contracts\AdminUtilityInterface;
use Raid\Core\Repository\Utilities\Utility;

class AdminUtility extends Utility implements AdminUtilityInterface
{
    /**
     * {@inheritdoc}
     */
    public const MODULE_LOWER = 'admin';

    /**
     * {@inheritdoc}
     */
    public const MODULE_UPPER = 'Admin';
}

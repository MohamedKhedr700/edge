<?php

namespace App\Utilities;

use App\Actions\LoginAction;
use App\Actions\RegisterAction;
use App\Models\User;
use App\Repositories\UserRepository;
use Raid\Core\Repository\Utilities\Contracts\UtilityInterface;
use Raid\Core\Repository\Utilities\Utility;

class UserUtility extends Utility implements UtilityInterface
{
    /**
     * {@inheritdoc}
     */
    public const MODULE = 'user';

    /**
     * {@inheritdoc}
     */
    public const MODEL = User::class;

    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = UserRepository::class;

    /**
     * {@inheritdoc}
     */
    public static function getActions(): array
    {
        return [
            LoginAction::class,
            RegisterAction::class,
        ];
    }
}

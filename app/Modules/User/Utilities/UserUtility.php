<?php

namespace Modules\User\Utilities;

use App\Modules\User\Events\LoginUserEvent;
use App\Modules\User\Events\RegisterUserEvent;
use Modules\User\Http\Transformers\UserTransformer;
use Modules\User\Models\User;
use Modules\User\Providers\RouteServiceProvider;
use Modules\User\Repositories\UserRepository;
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

    /**
     * {@inheritdoc}
     */
    public static function getEvents(): array
    {
        return [
            LoginUserEvent::class,
            RegisterUserEvent::class,
        ];
    }
}

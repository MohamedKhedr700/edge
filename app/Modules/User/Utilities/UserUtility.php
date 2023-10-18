<?php

namespace Modules\User\Utilities;

use Raid\Core\Repository\Utilities\Utility;
use Modules\User\Utilities\Contracts\UserUtilityInterface;
use Modules\User\Models\User;
use Modules\User\Repositories\UserRepository;
use Modules\User\Http\Transformers\UserTransformer;
use Modules\User\Providers\RouteServiceProvider;

class UserUtility extends Utility implements UserUtilityInterface
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
    public const TRANSFORMER = UserTransformer::class;

    /**
     * {@inheritdoc}
     */
    public const ROUTE_SERVICE_PROVIDER = RouteServiceProvider::class;
}

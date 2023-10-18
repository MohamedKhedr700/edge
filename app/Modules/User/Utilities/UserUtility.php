<?php

namespace Modules\User\Utilities;

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

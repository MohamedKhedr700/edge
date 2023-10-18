<?php

namespace Modules\User\Utilities;

use Modules\Core\Utilities\Utility;
use Modules\User\Utilities\Contracts\UserUtilityInterface;
use Modules\User\Providers\RouteServiceProvider;
use Modules\User\Repositories\UserRepository;
use Modules\User\Repositories\Contracts\UserRepositoryInterface;
use Modules\User\Models\User;
use Modules\User\Http\Transformers\UserTransformer;

class UserUtility extends Utility implements UserUtilityInterface
{
    /**
     * {@inheritdoc}
     */
    public const MODULE_NAME = 'user';

    /**
     * {@inheritdoc}
     */
    public const ROUTE_SERVICE_PROVIDER = RouteServiceProvider::class;

    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = UserRepository::class;

    /**
     * {@inheritdoc}
     */
    public const REPOSITORY_INTERFACE = UserRepositoryInterface::class;

    /**
     * {@inheritdoc}
     */
    public const MODEL = User::class;

    /**
     * {@inheritdoc}
     */
    public const TRANSFORMER = UserTransformer::class;
}

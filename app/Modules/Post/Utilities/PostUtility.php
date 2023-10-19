<?php

namespace Modules\Post\Utilities;

use App\Modules\Post\Http\Gates\PremiumPostGate;
use Modules\Post\Http\Gates\PostGate;
use Modules\Post\Http\Transformers\PostTransformer;
use Modules\Post\Models\Post;
use Modules\Post\Providers\RouteServiceProvider;
use Modules\Post\Repositories\PostRepository;
use Modules\Post\Utilities\Contracts\PostUtilityInterface;
use Raid\Core\Repository\Utilities\Utility;

class PostUtility extends Utility implements PostUtilityInterface
{
    /**
     * {@inheritdoc}
     */
    public const MODULE_LOWER = 'post';

    /**
     * {@inheritdoc}
     */
    public const MODULE_UPPER = 'Post';

    /**
     * {@inheritdoc}
     */
    public const MODEL = Post::class;

    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = PostRepository::class;

    /**
     * {@inheritdoc}
     */
    public const TRANSFORMER = PostTransformer::class;

    /**
     * {@inheritdoc}
     */
    public const ROUTE_SERVICE_PROVIDER = RouteServiceProvider::class;

    /**
     * {@inheritdoc}
     */
    public static function getGates(): array
    {
        return [
            PostGate::class,
        ];
    }
}

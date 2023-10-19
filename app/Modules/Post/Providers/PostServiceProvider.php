<?php

namespace Modules\Post\Providers;

use Modules\Post\Repositories\PostRepository;
use Raid\Core\Modules\Providers\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = PostRepository::class;


}

<?php

namespace Modules\Post\Services;

use Modules\Core\Services\ApiService;
use Modules\Core\Services\Contracts\ServiceInterface;
use Modules\Post\Repositories\PostRepository;

class PostService extends ApiService implements ServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = PostRepository::class;
}


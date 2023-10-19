<?php

namespace Modules\Post\Services;

use Raid\Core\Repository\Services\Contracts\ActionServiceInterface;
use Raid\Core\Repository\Services\ActionService;
use Modules\Post\Repositories\PostRepository;

class PostService extends ActionService implements ActionServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = PostRepository::class;
}


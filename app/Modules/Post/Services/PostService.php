<?php

namespace Modules\Post\Services;

use Modules\Post\Repositories\PostRepository;
use Raid\Core\Repository\Services\ActionService;
use Raid\Core\Repository\Services\Contracts\ActionServiceInterface;

class PostService extends ActionService implements ActionServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = PostRepository::class;
}

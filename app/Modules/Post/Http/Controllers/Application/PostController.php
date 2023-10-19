<?php

namespace Modules\Post\Http\Controllers\Application;

use Modules\Post\Repositories\PostRepository;
use Raid\Core\Controller\Controllers\Controller;

class PostController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = PostRepository::class;
}

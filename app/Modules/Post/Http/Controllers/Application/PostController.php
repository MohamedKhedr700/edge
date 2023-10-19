<?php

namespace Modules\Post\Http\Controllers\Application;

use Raid\Core\Controller\Controllers\Controller;
use Modules\Post\Repositories\PostRepository;

class PostController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = PostRepository::class;
}

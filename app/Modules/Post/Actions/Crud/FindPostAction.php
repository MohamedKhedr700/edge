<?php

namespace Modules\Post\Actions\Crud;

use Modules\Post\Repositories\PostRepository;
use Raid\Core\Action\Actions\Contracts\Crud\FindActionInterface;
use Raid\Core\Action\Actions\Crud\FindAction;

class FindPostAction extends FindAction implements FindActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = PostRepository::class;
}

<?php

namespace Modules\Post\Actions\Crud;

use Modules\Post\Repositories\PostRepository;
use Raid\Core\Action\Actions\Contracts\Crud\CreateActionInterface;
use Raid\Core\Action\Actions\Crud\CreateAction;

class CreatePostAction extends CreateAction implements CreateActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = PostRepository::class;
}

<?php

namespace Modules\Post\Actions\Crud;

use Modules\Post\Repositories\PostRepository;
use Raid\Core\Action\Actions\Contracts\Crud\UpdateActionInterface;
use Raid\Core\Action\Actions\Crud\UpdateAction;

class UpdatePostAction extends UpdateAction implements UpdateActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = PostRepository::class;
}

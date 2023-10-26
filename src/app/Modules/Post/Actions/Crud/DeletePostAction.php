<?php

namespace Modules\Post\Actions\Crud;

use Modules\Post\Repositories\PostRepository;
use Raid\Core\Action\Actions\Contracts\Crud\DeleteActionInterface;
use Raid\Core\Action\Actions\Crud\DeleteAction;

class DeletePostAction extends DeleteAction implements DeleteActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = PostRepository::class;
}

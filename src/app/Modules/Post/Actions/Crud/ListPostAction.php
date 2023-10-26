<?php

namespace Modules\Post\Actions\Crud;

use Modules\Post\Repositories\PostRepository;
use Raid\Core\Action\Actions\Contracts\Crud\ListActionInterface;
use Raid\Core\Action\Actions\Crud\ListAction;

class ListPostAction extends ListAction implements ListActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = PostRepository::class;
}

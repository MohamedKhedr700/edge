<?php

namespace App\Actions;

use App\Models\Post;
use Exception;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\ActionInterface;

class CreatePostAction extends Action implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = 'create';

    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = Post::class;

    /**
     * Handle the action.
     *
     * @throws Exception
     */
    public function handle(array $data = []): Post
    {
        return $this->actionable()->create($data);
    }
}

<?php

namespace Modules\Post\Http\Controllers\Dashboard;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Modules\Post\Actions\Crud\CreatePostAction;
use Modules\Post\Actions\Crud\DeletePostAction;
use Modules\Post\Actions\Crud\FindPostAction;
use Modules\Post\Actions\Crud\ListPostAction;
use Modules\Post\Actions\Crud\UpdatePostAction;
use Modules\Post\Http\Requests\ListPostRequest;
use Modules\Post\Http\Requests\StorePostRequest;
use Modules\Post\Http\Requests\UpdatePostRequest;
use Modules\Post\Models\Post;
use Modules\Post\Repositories\PostRepository;
use Raid\Core\Controller\Controllers\Controller;
use Raid\Core\Request\Exceptions\UnvalidatedRequestException;

class PostController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = PostRepository::class;

    /**
     * Store a new resource.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function store(StorePostRequest $request, CreatePostAction $createPostAction): JsonResponse
    {
        return parent::storeResource($request, $createPostAction);
    }

    /**
     * List resources.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function index(ListPostRequest $request, ListPostAction $listPostAction): JsonResponse
    {
        return parent::listResources($request, $listPostAction);
    }

    /**
     * Show resource.
     *
     * @throws AuthorizationException
     */
    public function show(Post $id, FindPostAction $findPostAction): JsonResponse
    {
        return parent::showResource($id, $findPostAction);
    }

    /**
     * Update resource.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function update(UpdatePostRequest $request, Post $id, UpdatePostAction $updatePostAction): JsonResponse
    {
        return parent::updateResource($request, $id, $updatePostAction);
    }

    /**
     * Delete resource.
     *
     * @throws AuthorizationException
     */
    public function delete(Post $id, DeletePostAction $deletePostAction): JsonResponse
    {
        return parent::deleteResource($id, $deletePostAction);
    }
}

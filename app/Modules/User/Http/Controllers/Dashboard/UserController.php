<?php

namespace Modules\User\Http\Controllers\Dashboard;

use Modules\User\Actions\Crud\CreateUserAction;
use Modules\User\Actions\Crud\DeleteUserAction;
use Modules\User\Actions\Crud\FindUserAction;
use Modules\User\Actions\Crud\ListUserAction;
use Modules\User\Actions\Crud\UpdateUserAction;
use Raid\Core\Request\Exceptions\UnvalidatedRequestException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Modules\User\Http\Requests\StoreUserRequest;
use Modules\User\Http\Requests\UpdateUserRequest;
use Modules\User\Http\Requests\ListUserRequest;
use Modules\User\Repositories\UserRepository;
use Modules\User\Models\User;
use Raid\Core\Controller\Controllers\Controller;

class UserController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = UserRepository::class;

    /**
     * Store a new resource.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function store(StoreUserRequest $request, CreateUserAction $createUserAction): JsonResponse
    {
        return parent::storeResource($request, $createUserAction);
    }

    /**
     * List resources.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function index(ListUserRequest $request, ListUserAction $listUserAction): JsonResponse
    {
        return parent::listResources($request, $listUserAction);
    }

    /**
     * Show resource.
     *
     * @throws AuthorizationException
     */
    public function show(User $id, FindUserAction $findUserAction): JsonResponse
    {
        return parent::showResource($id, $findUserAction);
    }

    /**
     * Update resource.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function update(UpdateUserRequest $request, User $id, UpdateUserAction $updateUserAction): JsonResponse
    {
        return parent::updateResource($request, $id, $updateUserAction);
    }

    /**
     * Delete resource.
     *
     * @throws AuthorizationException
     */
    public function delete(User $id, DeleteUserAction $deleteUserAction): JsonResponse
    {
        return parent::deleteResource($id, $deleteUserAction);
    }
}
